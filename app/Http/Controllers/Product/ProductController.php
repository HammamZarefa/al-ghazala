<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }
    public function index(){
        return $this->productService->index();
    }

    public function create(){
        return $this->productService->create();
    }

    public function store(Request $request){
        return $this->productService->store($request);
    }

    public function show($id){
        return $this->productService->show($id);
    }

    public function edit($id){
        return $this->productService->edit($id);
    }

    public function update(Request $request, $id){
        return $this->productService->update($request, $id);
    }

    public function destroy($id){
        return $this->productService->destroy($id);
    }

}
