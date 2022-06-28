<?php

namespace App\Service\Banner;

use App\Http\Requests\Banner\BannerRequest;
use App\Manager\Banner\BannerManager;
use Illuminate\Http\Request;

class BannerService
{
    private $bannerManager;
    public function __construct(BannerManager $bannerManager)
    {
        $this->bannerManager = $bannerManager;
    }
    public function index(){
        return $this->bannerManager->index();
    }

    public function create(){
        return $this->bannerManager->create();
    }

    public function store(BannerRequest $request){
        return $this->bannerManager->store($request);
    }

    public function show($id){
        return $this->bannerManager->show($id);
    }

    public function edit($id){
        return $this->bannerManager->edit($id);
    }

    public function update(BannerRequest $request, $id){
        return $this->bannerManager->update($request, $id);
    }

    public function destroy($id){
        return $this->bannerManager->destroy($id);
    }
}
