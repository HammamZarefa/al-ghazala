<?php

namespace App\Service\General;

use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\General\GeneralRequest;
use App\Manager\General\GeneralManager;
use Illuminate\Http\Request;

class GeneralService
{
    private $generalManager;
    public function __construct(GeneralManager $generalManager)
    {
        $this->generalManager=$generalManager;
    }

    public function dashboard(){
        return $this->generalManager->dashboard();
    }

    public function general(){
        return $this->generalManager->general();
    }

    public function generalUpdate(GeneralRequest $request){
        return $this->generalManager->generalUpdate($request);
    }

    public function about(){
        return $this->generalManager->about();
    }

    public function aboutUpdate(AboutRequest $request){
        return $this->generalManager->aboutUpdate($request);
    }

}
