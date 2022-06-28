<?php

namespace App\Manager\Pcategory;

use App\Http\Requests\PCategory\PCategoryRequest;
use App\Repositories\Interfaces\PcategoryRepositoryInterface;
use Illuminate\Http\Request;

class PcategoryManager
{
    private $pcategoryRepository;
    public function __construct(PcategoryRepositoryInterface $pcategoryRepository)
    {
        $this->pcategoryRepository=$pcategoryRepository;
    }
    public function index(){
        return $this->pcategoryRepository->index();
    }

    public function store(PCategoryRequest $request){
        return $this->pcategoryRepository->store($request);
    }

    public function show($id){
        return $this->pcategoryRepository->show($id);
    }

    public function edit($id){
        return $this->pcategoryRepository->edit($id);
    }

    public function update(PCategoryRequest $request,$id){
        return $this->pcategoryRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->pcategoryRepository->destroy($id);
    }
}
