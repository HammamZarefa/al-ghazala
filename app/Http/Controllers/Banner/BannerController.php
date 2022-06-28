<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerRequest;
use App\Service\Banner\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $bannerService;
    public function __construct(BannerService $bannerService)
    {
        $this->bannerService=$bannerService;
    }

    public function index(){
        $banner = $this->bannerService->index();
        return view ('admin.banner.index', [
            'banner' => $banner
        ]);
    }

    public function create(){
        $banner = $this->bannerService->create();
        return view ('admin.banner.create',[
            'banner' => $banner
        ]);
    }

    public function store(BannerRequest $request){
        return $this->bannerService->store($request);
    }

    public function show($id){
        return $this->bannerService->show($id);
    }

    public function edit($id){
        $banner = $this->bannerService->edit($id);
        return view ('admin.banner.edit',compact('banner'));
    }

    public function update(BannerRequest $request, $id){
        return $this->bannerService->update($request, $id);
    }

    public function destroy($id){
        return $this->bannerService->destroy($id);
    }
}
