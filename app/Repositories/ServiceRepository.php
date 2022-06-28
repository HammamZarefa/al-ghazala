<?php

namespace App\Repositories;

use App\Http\Requests\Service\ServiceRequest;
use App\Models\Service\Service;
use App\Models\Service\ServiceTranslation;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceRepository implements ServiceRepositoryInterface{

    private $request;
    private $service;
    private $serviceTranslation;
    public function __construct(Service $service, ServiceTranslation $serviceTranslation, Request $request)
    {
        $this->request = $request;
        $this->service = $service;
        $this->serviceTranslation = $serviceTranslation;
    }

    public function index()
    {
        $service = $this->service->orderBy('id','desc')->get();
        return view('admin.service.index',compact('service'));
    }

    public function create()
    {
        return view('admin.service.create');

    }

    public function store(ServiceRequest $request)
    {
//        dd($request);
        try{

            $icon = $request->file('icon');

            if($icon){
                $icon = $icon->store('images/service', 'public');
            }
//            dd($icon);
            $service = new Service();

            $service->icon = $icon;
            $service->title = ['en'=> $request['title_en'],'ar'=> $request['title_ar']];
            $service->desc = ['en'=>$request['desc_en'],'ar'=>$request['desc_ar']];
            $service->quote = ['en'=>$request['quote_en'],'ar'=>$request['quote_ar']];
            $service->is_active = 1;
            $service->slug = $request['slug'];


            DB::beginTransaction();
            $service->save();

            DB::commit();


            return redirect()->route('admin.service')->with('success', 'Data added successfully');
        }catch(\Exception $ex){
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.service.create')->with('error', $ex->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = $this->service->findOrFail($id);

        return view('admin.service.edit',compact('service'));
    }

    public function update(ServiceRequest $request,$id)
    {
//        dd($request);
        try{
//dd($request->file('icon'));
            $service = $this->service->findOrFail($id);
            $new_icon = $request->file('icon');

            if($new_icon){
                if($service->icon && file_exists(storage_path('images/service' . $service->icon))){
                    \Storage::delete('public/'. $service->icon);
                }

                $new_icon_path = $new_icon->store('images/service', 'public');

                $service->icon = $new_icon_path;
            }
//            $service->icon = $request->icon;
            $service->title = ['en'=> $request['title_en'],'ar'=> $request['title_ar']];
            $service->desc = ['en'=>$request['desc_en'],'ar'=>$request['desc_ar']];
            $service->quote = ['en'=>$request['quote_en'],'ar'=>$request['quote_ar']];
            $service->is_active = 1;
            $service->slug = $request['slug'];
//            dd($service);
            DB::beginTransaction();
            // //create the default language's service
            $service->update();

            DB::commit();
            return redirect()->route('admin.service')->with('success', 'Data added successfully');
        }catch(\Exception $ex){
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.service.create')->with('error', 'Data failed to add');
        }
    }

    public function destroy($id)
    {
         $service = $this->service::findOrFail($id);

        $service->delete();

        return redirect()->route('admin.service')->with('success', 'Data deleted successfully');
    }
}
