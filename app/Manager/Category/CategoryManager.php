<?php

namespace App\Manager\Category;

use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Category\CategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryManager
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository=$categoryRepository;
    }
    public function index(){
        return $this->categoryRepository->index();
    }

    public function create(){
        return $this->categoryRepository->create();
    }

    public function store(CategoryRequest $request){
        return $this->categoryRepository->store($request);
    }

    public function show($id){
        return $this->categoryRepository->show($id);
    }

    public function edit($id){
        return $this->categoryRepository->edit($id);
    }

    public function update($id, CategoryRequest $request){
        return $this->categoryRepository->update($id, $request);
    }

    public function destroy($id){
        return $this->categoryRepository->destroy($id);
    }
}
