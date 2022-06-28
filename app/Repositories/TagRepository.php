<?php

namespace App\Repositories;

use App\Http\Requests\Tag\TagRequest;
use App\Models\Tag\Tag;
use App\Models\Tag\TagTranslation;
use App\Repositories\Interfaces\TagRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TagRepository implements TagRepositoryInterface
{

    private $request;
    private $tag;
    private $tagTranslation;

    public function __construct(Tag $tag, TagTranslation $tagTranslation, Request $request)
    {
        $this->request = $request;
        $this->tag = $tag;
        $this->tagTranslation = $tagTranslation;
    }

    public function index()
    {
        $tag = Tag::orderBy('id', 'desc')->get();

        return view('admin.tag.index', compact('tag'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        try {
            $tag = new Tag();
            $tag->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $tag->meta_desc = ['en' => $request['meta_desc_en'], 'ar' => $request['meta_desc_ar']];
            $tag->keyword = ['en' => $request['keyword_en'], 'ar' => $request['keyword_ar']];
            $tag->is_active = 1;
            $tag->slug = $request['name_en'];

            DB::beginTransaction();
            $tag->save();
            DB::commit();

            return redirect()->route('admin.tag')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
//            return $ex->getMessage();
            return redirect()->route('admin.tag')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tag = $this->tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
    }

    public function update($id, TagRequest $request)
    {
        try {
            $tag = $this->tag::findOrFail($id);

            $tag->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $tag->meta_desc = ['en' => $request['meta_desc_en'], 'ar' => $request['meta_desc_ar']];
            $tag->keyword = ['en' => $request['keyword_en'], 'ar' => $request['keyword_ar']];
            $tag->is_active = 1;
            $tag->slug = $request['name_en'];

            DB::beginTransaction();

            $tag->update();
            DB::commit();
            return redirect()->route('admin.tag')->with('success', 'Data updated successfully');
        } catch (\Exception $ex) {
            DB::rollback();
//            return $ex->getMessage();
            return redirect()->route('admin.tag')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.tag')->with('success', 'Data deleted successfully');
    }
}
