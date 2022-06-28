<?php

namespace App\Http\Controllers\Pcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\PCategory\PCategoryRequest;
use App\Service\Pcategory\PcategoryService;
use Illuminate\Http\Request;

class PCategoryController extends Controller
{
    private $pcategoryService;
    public function __construct(PcategoryService $pcategoryService)
    {
        $this->pcategoryService=$pcategoryService;
    }
    public function index(){
        return $this->pcategoryService->index();
    }

    public function store(PCategoryRequest $request){
        return $this->pcategoryService->store($request);
    }

    public function show($id){
        return $this->pcategoryService->show($id);
    }

    public function edit($id){
        return $this->pcategoryService->edit($id);
    }

    public function update(PCategoryRequest $request,$id){
        return $this->pcategoryService->update($request,$id);
    }

    public function destroy($id){
        return $this->pcategoryService->destroy($id);
    }
}
