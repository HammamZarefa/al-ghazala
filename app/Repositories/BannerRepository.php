<?php

namespace App\Repositories;

use App\Http\Requests\Banner\BannerRequest;
use App\Models\Banner\Banner;
use App\Models\Banner\BannerTranslation;
use App\Repositories\Interfaces\BannerRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerRepository implements BannerRepositoryInterface{

    private $banner;

    public function __construct(Banner $banner )
    {
        $this->banner = $banner;
    }

    public function index()
    {
        return $this->banner->all();
    }

    public function create()
    {

    }

    public function store(BannerRequest $request)
    {
        try {
            $cover = $request->file('cover');
            if($cover){
            $cover = $cover->store('images/banner', 'public');
            }
            $banner=new Banner();
//           / dd($request);
            DB::beginTransaction();
            //create the default language's banner
            $banner = $banner->save([
                'link' => $request['link'],
                'is_active' => $request->is_active = 1,
                'cover' => $cover,
                'title'=>['en'=> $request['title_en'],'ar'=> $request['title_ar']],
                'desc'=>['en'=>$request['desc_en'],'ar'=>$request['desc_ar']]
            ]);
//            $banner->save();
            DB::commit();
            return redirect()->route('admin.banner')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.banner.create')->with('error', 'Data failed to create'.$ex);
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return $this->banner->findOrFail($id);
    }

    public function update(BannerRequest $request, $id)
    {
            $banner = $this->banner->findOrFail($id);
            if($request->file('cover')){
                if($request->cover && file_exists(storage_path('app/public/images/' . $request->cover))){
                    Storage::delete('public/'. $request->cover);
                }
                $request->cover = $request->cover->store('images/banner', 'public');
            }
            $banner->title=['en' => $request['title_en'], 'ar' => $request['title_ar']];
            $banner->desc=['en' => $request['desc_en'], 'ar' => $request['desc_ar']];
            $banner->link=$request->link;
            if($request->cover)
                $banner->cover=$request->cover;
            DB::beginTransaction();
            $banner->update();
            DB::commit();
            return redirect()->route('admin.banner')->with('success', 'Data updated successfully');
        }

    public function destroy($id)
    {
        try {
            $banner = $this->banner->findOrFail($id);
            if ($banner->delete()) {
                if($banner->cover && file_exists(storage_path('app/public/' . $banner->cover))){
                    Storage::delete('public/'. $banner->cover);
                }
            }
            return redirect()->route('admin.banner')->with('success', 'Data deleted successfully');
        } catch (\Exception $ex) {
            return redirect()->route('admin.banner')->with('success', 'Data failed to deleted');
        }

    }
}

