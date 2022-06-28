<?php

namespace App\Repositories;

use App\Http\Requests\Link\LinkRequest;
use App\Models\Link\Link;
use App\Models\Link\LinkTranslation;
use App\Repositories\Interfaces\LinkRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkRepository implements LinkRepositoryInterface
{

    private $link;
    private $request;
    private $linkTranslation;

    public function __construct(Link $link, LinkTranslation $linkTranslation, Request $request)
    {
        $this->link = $link;
        $this->request = $request;
        $this->linkTranslation = $linkTranslation;
    }

    public function index()
    {
        $link = $this->link::orderBy('id', 'desc')->get();
        return view('admin.link.index', compact('link'));
    }

    public function create()
    {
        return view('admin.link.create');
    }

    public function store(LinkRequest $request)
    {
        try {
            $link = new Link();
            $link->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $link->link = $request['link'];
            $link->is_active = 1;

            DB::beginTransaction();
            $link->save();
            DB::commit();

            return redirect()->route('admin.link')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.link.create')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $link = $this->link::findOrFail($id);
        return view('admin.link.edit', compact('link'));
    }

    public function update(LinkRequest $request, $id)
    {
        try {
            $link = $this->link::findOrFail($id);
            $link->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $link->link = $request['link'];
            $link->is_active = 1;
            DB::beginTransaction();
                $link->update();
            DB::commit();
            return redirect()->route('admin.link')->with('success', 'Data updated successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.link.create')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $link = $this->link::findOrFail($id);
        $link->delete();

        return redirect()->route('admin.link')->with('success', 'Data deleted successfully');
    }
}
