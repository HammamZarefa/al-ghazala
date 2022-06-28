<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\General\GeneralRequest;
use App\Service\General\GeneralService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use phpDocumentor\Reflection\Types\Parent_;

class GeneralController extends Controller
{

    private $generalService;
    public function __construct(GeneralService $generalService)
    {
        $this->generalService=$generalService;
    }

    public function dashboard(){
        return $this->generalService->dashboard();
    }

    public function general(){
        return $this->generalService->general();
    }

    public function generalUpdate(GeneralRequest $request){
        return $this->generalService->generalUpdate($request);
    }

    public function about(){
        $about= $this->generalService->about();
       $lang=$this->getlanguages();
        return view('admin.about', [
            'about' => $about,
            "languges"=>$lang
        ]);
    }

    public function aboutUpdate(AboutRequest $request){
        return $this->generalService->aboutUpdate($request);
    }
}
