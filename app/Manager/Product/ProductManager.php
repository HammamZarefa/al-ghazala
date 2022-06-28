<?php

namespace App\Manager\Product;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductManager
{
    private $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository=$productRepository;
    }
    public function index(){
        return $this->productRepository->index();
    }

    public function create(){
        return $this->productRepository->create();
    }

    public function store(Request $request){
        return $this->productRepository->store($request);
    }

    public function show($id){
        return $this->productRepository->show($id);
    }

    public function edit($id){
        return $this->productRepository->edit($id);
    }

    public function update(Request $request, $id){
//        dd($id);
        return $this->productRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->productRepository->destroy($id);
    }
}
