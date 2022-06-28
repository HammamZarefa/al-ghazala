<?php

namespace App\Service\Product;

use App\Manager\Product\ProductManager;
use Illuminate\Http\Request;

class ProductService
{
    private $productManager;
    public function __construct(ProductManager $productManager)
    {
        $this->productManager = $productManager;
    }
    public function index(){
        return $this->productManager->index();
    }

    public function create(){
        return $this->productManager->create();
    }

    public function store(Request $request){
        return $this->productManager->store($request);
    }

    public function show($id){
        return $this->productManager->show($id);
    }

    public function edit($id){
        return $this->productManager->edit($id);
    }

    public function update(Request $request, $id){
        return $this->productManager->update($request, $id);
    }

    public function destroy($id){
        return $this->productManager->destroy($id);
    }
}
