<?php

namespace App\Repositories;

use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\General\GeneralRequest;
use App\Models\About\About;
use App\Models\General\General;
use App\Models\Page\Page;
use App\Repositories\Interfaces\GeneralRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Post\Post;
use App\Models\Team\Team;
use App\Models\User\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GeneralRepository implements GeneralRepositoryInterface
{

    private $request;
    private $post;
    private $page;
    private $user;
    private $team;
    private $about;
    private $general;

    public function __construct(General $general, User $user, Team $team, Page $page, Post $post, About $about, Request $request)
    {
        $this->request = $request;
        $this->post = $post;
        $this->page = $page;
        $this->user = $user;
        $this->team = $team;
        $this->about = $about;
        $this->general = $general;
    }

    public function dashboard()
    {
        $admin = $this->user->count();
        $team = $this->team->count();
        $blog = $this->post->count();
        $page = $this->page->count();
        $general = $this->general->find(1);
        return view('admin.dashboard', compact('admin', 'blog', 'page', 'team','general'));
    }

    public function general()
    {
        $general = $this->general->find(1);
        return view('admin.general', [
            'general' => $general
        ]);
    }

    public function generalUpdate( $request)
    {
        $general = $this->general->find(1);

            if ($request->logo) {
                if ($request->logo && file_exists(storage_path('app/public/' . $request->logo))) {
                    Storage::delete('public/' . $request->logo);
                }
                $new_logo = $request->file('logo')->store('images/general', 'public');
                $general->logo = $new_logo;
            }
            if ($request->file('favicon')) {
                if ($request->favicon && file_exists(storage_path('app/public/' . $request->favicon))) {
                    Storage::delete('public/' . $request->favicon);
                }
                $new_favicon = $request->file('favicon')->store('images/general', 'public');
                $general->favicon = $new_favicon;
            }
                    $general->email = $request['email'];
                    $general->twitter = $request['twitter'];
                    $general->facebook = $request['facebook'];
                    $general->instagram = $request['instagram'];
                    $general->linkedin = $request['linkedin'];
                    $general->gmaps = $request['gmaps'];
                    $general->title = ['en' => $request['title_en'], 'ar' => $request['title_ar']];
                    $general->address1 = ['en' => $request['address1_en'], 'ar' => $request['address1_ar']];
                    $general->address2 = ['en' => $request['address2_en'], 'ar' => $request['address2_ar']];
                    $general->footer = ['en' => $request['footer_en'], 'ar' => $request['footer_ar']];
                    $general->tawkto = $request['tawkto'];
                    $general->disqus = $request['disqus'];
                    $general->gverification = $request['gverification'];
                    $general->sharethis = ['en' => $request['sharethis_en'], 'ar' => $request['sharethis_ar']];
                    $general->keyword= ['en' => $request['keyword_en'], 'ar' => $request['keyword_ar']];
                    $general->meta_desc =['en' => $request['meta_desc_en'], 'ar' => $request['meta_desc_ar']];
            DB::beginTransaction();
           $general->update([$general]);
            DB::commit();
            return redirect()->route('admin.general')->with('success', 'Data updated successfully');

    }

    public
    function about()
    {
        $about = $this->about->find(1);
        return $about;
    }

    public
    function aboutUpdate(AboutRequest $request)
    {
//        try {
        $about = $this->about->find(1);
        DB::beginTransaction();
        $about['title'] = ['en' => $request['title_en'], 'ar' => $request['title_ar']];
        $about['subject'] = ['en' => $request['subject_en'], 'ar' => $request['subject_ar']];
        $about['desc'] = ['en' => $request['desc_en'], 'ar' => $request['desc_ar']];
        $about->save();
        DB::commit();
        return redirect()->route('admin.about')->with('success', 'Data updated successfully');
//        } catch (\Exception $ex) {
//            DB::rollback();
//            return redirect()->route('admin.about')->with('error', 'Data failed to update' .$ex);
//        }
    }
}
