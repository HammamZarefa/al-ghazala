<?php

namespace App\Manager\Banner;

use App\Http\Requests\Banner\BannerRequest;
use App\Repositories\Interfaces\BannerRepositoryInterface;
use Illuminate\Http\Request;

class BannerManager
{
    private $bannerRepository;
    public function __construct(BannerRepositoryInterface $bannerRepository)
    {
        $this->bannerRepository=$bannerRepository;
    }
    public function index(){
        return $this->bannerRepository->index();
    }

    public function create(){
        return $this->bannerRepository->create();
    }

    public function store(BannerRequest $request){
        return $this->bannerRepository->store($request);
    }

    public function show($id){
        return $this->bannerRepository->show($id);
    }

    public function edit($id){
        return $this->bannerRepository->edit($id);
    }

    public function update(BannerRequest $request, $id){
        return $this->bannerRepository->update($request, $id);
    }

    public function destroy($id){
        return $this->bannerRepository->destroy($id);
    }
}
