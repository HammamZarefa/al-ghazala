<?php

namespace App\Repositories;

use App\Http\Requests\Partner\PartnerRequest;
use App\Models\Page\Page;
use App\Models\Page\PageTranslation;
use App\Models\Partner\Partner;
use App\Models\Partner\PartnerTranslation;
use App\Repositories\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerRepository implements PartnerRepositoryInterface
{

    private $partner;
    private $partnerTranslation;
    private $request;

    public function __construct(Partner $partner, PartnerTranslation $partnerTranslation, Request $request)
    {
        $this->partner = $partner;
        $this->partnerTranslation = $partnerTranslation;
        $this->request = $request;
    }

    public function index()
    {
        $partner = Partner::orderBy('id', 'desc')->get();
        return view('admin.partner.index', compact('partner'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(PartnerRequest $request)
    {
        try {


            $cover = $request->file('cover');
            if ($cover) {
                $cover_path = $cover->store('images/partner', 'public');
                // $coverName= 'images/banner'. 'public' . '/' .$cover-> getClientOriginalName();
            }
            $partner = new Partner();
            $partner->cover = $cover_path;
            $partner->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $partner->link = $request['link'];
            $partner->is_active = 1;

            DB::beginTransaction();
            $partner->save();
            DB::commit();

            return redirect()->route('admin.partner')->with('success', 'partner added successfully');

        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.partner.create')->with('error', 'partner failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partner.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, $id)
    {
        try {

            $partner = $this->partner::findOrFail($id);

            $new_cover = $request->file('cover');

            if($new_cover) {
                if ($partner->cover && file_exists(storage_path('app/public/' . $partner->cover))) {
                    Storage::delete('public/' . $partner->cover);
                }

                $new_cover_path = $new_cover->store('images/partner', 'public');
                $partner->cover = $new_cover_path;
            }
            $partner->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $partner->link = $request['link'];
            $partner->is_active = 1;

            DB::beginTransaction();
                $partner->update();
            DB::commit();
            return redirect()->route('admin.partner')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.partner.create')->with('error',$ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $partner = $this->partner::findOrFail($id);

        if ($partner->cover && file_exists(storage_path('app/public/' . $partner->cover))) {
            Storage::delete('public/' . $partner->cover);
        }

        $partner->delete();

        return redirect()->route('admin.partner')->with('success', 'Data deleted successfully');
    }
}
