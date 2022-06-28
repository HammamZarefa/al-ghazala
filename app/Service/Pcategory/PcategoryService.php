<?php

namespace App\Service\Pcategory;

use App\Http\Requests\PCategory\PCategoryRequest;
use App\Manager\Pcategory\PcategoryManager;
use Illuminate\Http\Request;

class  PcategoryService
{
    private $pcategoryManager;
    public function __construct(PcategoryManager $pcategoryManager)
    {
        $this->pcategoryManager = $pcategoryManager;
    }
    public function index(){
        return $this->pcategoryManager->index();
    }

    public function store(PCategoryRequest $request){
        return $this->pcategoryManager->store($request);
    }

    public function show($id){
        return $this->pcategoryManager->show($id);
    }

    public function edit($id){
        return $this->pcategoryManager->edit($id);
    }

    public function update(PCategoryRequest $request,$id){
        return $this->pcategoryManager->update($request,$id);
    }

    public function destroy($id){
        return $this->pcategoryManager->destroy($id);
    }
}
