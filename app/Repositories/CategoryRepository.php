<?php

namespace App\Repositories;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category\Category;
use App\Models\Category\CategoryTranslation;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryRepositoryInterface
{

    private $request;
    private $category;
    private $categoryTranslation;

    public function __construct(Category $category, CategoryTranslation $categoryTranslation, Request $request)
    {
        $this->request = $request;
        $this->category = $category;
        $this->categoryTranslation = $categoryTranslation;
    }

    public function index()
    {
        $category = $this->category::orderBy('id', 'desc')->get();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
//        dd($request);
        try {
            $category = new Category();
            $category->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $category->meta_desc = ['en' => $request['meta_desc_en'], 'ar' => $request['meta_desc_ar']];
            $category->keyword = ['en' => $request['keyword_en'], 'ar' => $request['keyword_ar']];
            $category->is_active = 1;
            $category->slug = $request['name_en'];
//            dd($category);
            DB::beginTransaction();
            $category->save();
            DB::commit();
            return redirect()->route('admin.category')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.category')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = $this->category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update($id, CategoryRequest $request)
    {
        try {

            $category = $this->category::findOrFail($id);

            $category->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $category->meta_desc = ['en' => $request['meta_desc_en'], 'ar' => $request['meta_desc_ar']];
            $category->keyword = ['en' => $request['keyword_en'], 'ar' => $request['keyword_ar']];
            $category->is_active = 1;
            $category->slug = $request['name_en'];

            DB::beginTransaction();
            $category->update();

            DB::commit();
            return redirect()->route('admin.category')->with('success', 'Data updated successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.category')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $category = $this->category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category')->with('success', 'Data deleted successfully');
    }

}
