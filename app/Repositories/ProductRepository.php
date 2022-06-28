<?php

namespace App\Repositories;

use App\Models\Product\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductRepositoryInterface{
    public function index()
   {
       $product = Product::orderBy('id','desc')->get();
       return view('admin.product.index',compact('product'));
   }

   public function create()
   {
       return view('admin.product.create');
   }

   public function store(Request $request)
   {
//       dd($request);
       $product = new Product();
       $product->name = ['en'=> $request['name_en'],'ar'=> $request['name_ar']];
       $product->link = $request->link;

       $cover = $request->file('cover');

       if($cover){
       $cover_path = $cover->store('images/product', 'public');

           $product->cover = $cover_path;
       }

      if ( $product->save()) {

       return redirect()->route('admin.product')->with('success', 'product added successfully');

      } else {

       return redirect()->route('admin.product.create')->with('error', 'product failed to add');

      }
   }

   public function show($id)
   {
       //
   }

   public function edit($id)
   {
       $product = Product::findOrFail($id);

       return view('admin.product.edit',compact('product'));
   }

   public function update(Request $request, $id)
   {
//       dd($request);
       $product = Product::findOrFail($id);
       $product->name = ['en'=> $request['name_en'],'ar'=> $request['name_ar']];
       $product->link = $request->link;

       $new_cover = $request->file('cover');

       if($new_cover){
       if($product->cover && file_exists(storage_path('app/public/' . $product->cover))){
           Storage::delete('public/'. $product->cover);
       }

       $new_cover_path = $new_cover->store('images/product', 'public');

       $product->cover = $new_cover_path;

       }

      if ( $product->save()) {

       return redirect()->route('admin.product')->with('success', 'Data added successfully');

      } else {

       return redirect()->route('admin.product.create')->with('error', 'Data failed to add');

      }
   }

   public function destroy($id)
   {
       $product = Product::findOrFail($id);

       if($product->cover && file_exists(storage_path('app/public/' . $product->cover))){
        Storage::delete('public/'. $product->cover);
    }

       $product->delete();

       return redirect()->route('admin.product')->with('success', 'Data deleted successfully');
   }
}
