<?php

namespace App\Repositories;

use App\Events\PostEvent;
use App\Http\Requests\Post\PostRequest;
use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\Post\PostTranslation;
use App\Models\Tag\Tag;
use App\Models\User\User;
use App\Notifications\AddPostNotification;
use App\Notifications\PostNotification;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class PostRepository implements PostRepositoryInterface{

    private $request;
    private $post;
    private $postTranslation;
    private $category;
    private $tag;
    public function __construct(Post $post , PostTranslation $postTranslation , Category $category , Tag $tag, Request $request)
    {
        $this->request = $request;
        $this->post = $post;
        $this->postTranslation = $postTranslation;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function index()
    {
        $post = $this->post::orderBy('id','desc')->get();

        return view('admin.post.index',compact('post'));
    }

    public function create()
    {

        $categories = $this->category::get();
        $tags = $this->tag::get();

        return view('admin.post.create',compact('categories','tags'));
    }

    public function store(PostRequest $request)
    {

        try {
            $cover = $request->file('cover');
            if($cover){
                $cover_path = $cover->store('images/blog', 'public');
            }
            $post = new Post();
            $post->title = ['en'=> $request['title_en'],'ar'=> $request['title_ar']];
            $post->body = ['en'=> $request['body_en'],'ar'=> $request['body_ar']];
            $post->meta_desc = ['en'=> $request['meta_desc_en'],'ar'=> $request['meta_desc_ar']];
            $post->keyword = ['en'=> $request['keyword_en'],'ar'=> $request['keyword_ar']];
            $post->author_id = Auth::user()->id;
            $post->cover = $cover_path;
            $post->is_active = 1;
            $post->category_id = $request['category'];
            $post->slug = $request['title_en'];
            $post->status = $request['status'];

//            dd($post);

            DB::beginTransaction();
            $post->save();

             DB::commit();

//            $notification=Post::find($unTransPost_id);
//            event(new PostEvent($notification));

            return redirect()->route('admin.post')->with('success', 'Data added successfully');

        } catch (\Exception $ex) {
            // return $ex->getMessage();
            DB::rollback();
            return redirect()->route('admin.post.create')->with('error', $ex->getMessage());
        }


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = $this->post::findOrFail($id);
        $categories = $this->category::get();
        $tags = $this->tag::get();
        return view('admin.post.edit',compact('post','categories','tags'));
    }

    public function update(PostRequest $request,$id)
    {
//        dd($request);
        try{

            $post = $this->post::findOrFail($id);

            $new_cover = $request->file('cover');

            if($new_cover){
                if($post->cover && file_exists(storage_path('images/blog' . $post->cover))){
                    \Storage::delete('public/'. $post->cover);
                }

                $new_cover_path = $new_cover->store('images/blog', 'public');

                $post->cover = $new_cover_path;
            }
            $post->title = ['en'=> $request['title_en'],'ar'=> $request['title_ar']];
            $post->body = ['en'=> $request['body_en'],'ar'=> $request['body_ar']];
            $post->meta_desc = ['en'=> $request['meta_desc_en'],'ar'=> $request['meta_desc_ar']];
            $post->keyword = ['en'=> $request['keyword_en'],'ar'=> $request['keyword_ar']];
            $post->author_id = Auth::user()->id;
            $post->is_active = 1;
            $post->category_id = $request['category'];
            $post->slug = $request['title_en'];
            $post->status = $request['status'];
            DB::beginTransaction();

             $post->update();
            DB::commit();
            return redirect()->route('admin.post')->with('success', 'Data added successfully');
        }catch(\Exception $ex){
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.post.create')->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $post = $this->post::findOrFail($id);

        $post->delete();

        return redirect()->route('admin.post')->with('success','Post moved to trash');
    }

    public function trash(){
        $post = $this->post::onlyTrashed()->get();

        return view('admin.post.trash', compact('post'));
    }

    public function restore($id) {
        $post = $this->post::withTrashed()->findOrFail($id);

        if ($post->trashed()) {
            $post->restore();
            return redirect()->route('admin.post.trash')->with('success','Data successfully restored');
        }else {
            return redirect()->route('admin.post.trash')->with('error','Data is not in trash');
        }
    }

    public function deletePermanent($id){

        $post = $this->post::withTrashed()->findOrFail($id);

        if (!$post->trashed()) {

            return redirect()->route('admin.post.trash')->with('error','Data is not in trash');

        }else {

            $post->tags()->detach();


            if($post->cover && file_exists(storage_path('app/public/' . $post->cover))){
                Storage::delete('public/'. $post->cover);
            }

        $post->forceDelete();

        return redirect()->route('admin.post.trash')->with('success', 'Data deleted successfully');
        }
    }

    public function MarkNotification(){
        foreach(auth()->user()->unreadNotifications as $notification){
            $notification->markAsRead();
        }
    }
}
