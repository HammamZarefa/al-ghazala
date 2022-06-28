<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Category\CategoryRequest;
use Illuminate\Http\Request;
use App\Service\Category\CategoryService;

class CategoryController extends Controller
{
    private $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService=$categoryService;
    }
    public function index(){
        return $this->categoryService->index();
    }

    public function create(){
        return $this->categoryService->create();
    }

    public function store(CategoryRequest $request){
        return $this->categoryService->store($request);
    }

    public function show($id){
        return $this->categoryService->show($id);
    }

    public function edit($id){
        return $this->categoryService->edit($id);
    }

    public function update(CategoryRequest $request, $id){
        return $this->categoryService->update($id,$request);
    }

    public function destroy($id){
        return $this->categoryService->destroy($id);
    }
}
