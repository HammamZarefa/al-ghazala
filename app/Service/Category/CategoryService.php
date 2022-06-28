<?php

namespace App\Service\Category;

use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Category\CategoryRequest;
use App\Manager\Category\CategoryManager;
use Illuminate\Http\Request;

class CategoryService
{
    private $categoryManager;
    public function __construct(CategoryManager $categoryManager)
    {
        $this->categoryManager = $categoryManager;
    }
    public function index(){
        return $this->categoryManager->index();
    }

    public function create(){
        return $this->categoryManager->create();
    }

    public function store(CategoryRequest $request){
        return $this->categoryManager->store($request);
    }

    public function show($id){
        return $this->categoryManager->show($id);
    }

    public function edit($id){
        return $this->categoryManager->edit($id);
    }

    public function update($id,CategoryRequest $request){
        return $this->categoryManager->update($id, $request);
    }

    public function destroy($id){
        return $this->categoryManager->destroy($id);
    }
}
