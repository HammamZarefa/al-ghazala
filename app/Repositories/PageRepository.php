<?php

namespace App\Repositories;

use App\Http\Requests\Page\PageRequest;
use App\Models\Page\Page;
use App\Models\Page\PageTranslation;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\PageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageRepository implements PageRepositoryInterface
{

    private $page;
    private $request;
    private $pageTranslation;

    public function __construct(Page $page, PageTranslation $pageTranslation, Request $request)
    {
        $this->page = $page;
        $this->request = $request;
        $this->pageTranslation = $pageTranslation;
    }

    public function index()
    {
        $page = Page::all();
        return view('admin.page.index', compact('page'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(PageRequest $request)
    {
        try {
            $page = new Page();
            $page->title = ['en' => $request['title_en'], 'ar' => $request['title_ar']];
            $page->text = ['en' => $request['text_en'], 'ar' => $request['text_ar']];
            $page->slug = $request['title_en'];
            $page->is_active = 1;

            DB::beginTransaction();
            $page->save();
            DB::commit();

            return redirect()->route('admin.page')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.page.create')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $page = $this->page::findOrFail($id);
        return view('admin.page.edit', compact('page'));
    }

    public function update(PageRequest $request, $id)
    {
        try {

            $page = $this->page::findOrFail($id);

            $page->title = ['en' => $request['title_en'], 'ar' => $request['title_ar']];
            $page->text = ['en' => $request['text_en'], 'ar' => $request['text_ar']];
            $page->slug = $request['title_en'];
            $page->is_active = 1;

            DB::beginTransaction();
                $page->update();
            DB::commit();
            return redirect()->route('admin.page')->with('success', 'Data Berhasil Diperbarui');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.page.edit')->with('error', 'Data Gagal Diperbarui');
        }
    }

    public function destroy($id)
    {
        $page = $this->page::findOrFail($id);

        $page->delete();

        return redirect()->route('admin.page')->with('success', 'Data Berhasil Dihapus');
    }
}
