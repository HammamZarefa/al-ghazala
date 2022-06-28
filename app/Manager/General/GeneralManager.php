<?php

namespace App\Manager\General;

use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\General\GeneralRequest;
use App\Repositories\Interfaces\GeneralRepositoryInterface;
use Illuminate\Http\Request;

class GeneralManager
{
    private $generalRepository;
    public function __construct(GeneralRepositoryInterface $generalRepository)
    {
        $this->generalRepository=$generalRepository;
    }

    public function dashboard(){
        return $this->generalRepository->dashboard();
    }

    public function general(){
        return $this->generalRepository->general();
    }

    public function generalUpdate(GeneralRequest $request){
        return $this->generalRepository->generalUpdate($request);
    }

    public function about(){
        return $this->generalRepository->about();
    }

    public function aboutUpdate(AboutRequest $request){
        return $this->generalRepository->aboutUpdate($request);
    }

}
