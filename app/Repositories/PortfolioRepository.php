<?php

namespace App\Repositories;

use App\Http\Requests\Portfolio\PortfolioRequest;
use App\Models\Pcategory\Pcategory;
use App\Models\Portfolio\Portfolio;
use App\Service\UploadService;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PortfolioRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PortfolioRepository implements PortfolioRepositoryInterface
{

    private $request;
    private $pcategory;
    private $portfolio;

    private $uploadService;

    public function __construct(Portfolio $portfolio, Pcategory $pcategory, Request $request, UploadService $uploadService)
    {
        $this->request = $request;
        $this->pcategory = $pcategory;
        $this->portfolio = $portfolio;

    }

    public function index()
    {
        $portfolio = $this->portfolio->orderBy('id', 'desc')->get();

        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        $categories = $this->pcategory->get();

        return view('admin.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $portfolio = new Portfolio();
            $slug = $request->slug;
            $cover = $request->file('cover');
            if ($cover) {
                $cover_path = $cover->store('images/portfolio', 'public');
            }
//dd($request);
            $portfolio->cover = $cover_path;
            $portfolio->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $portfolio->client = ['en' => $request['client_en'], 'ar' => $request['client_ar']];
            $portfolio->desc = ['en' => $request['desc_en'], 'ar' => $request['desc_ar']];
            $portfolio->slug = $request['slug'];
            $portfolio->is_active = 1;
            $portfolio->date = $request['date'];
            $portfolio->pcategory_id = $request['category'];
            $portfolio->link = $request['link'];


//dd($portfolio);
            DB::beginTransaction();
            // create the default language's portfolio
            $portfolio->save();
            if ($request->hasFile('images'))
                UploadService::upload($request, $portfolio->id);
            DB::commit();

            return redirect()->route('admin.portfolio')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.portfolio.create')->with('error', $ex->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
//        dd($id);
        $portfolio = $this->portfolio->findOrFail($id);
        $categories = $this->pcategory->get();

        return view('admin.portfolio.edit', compact('portfolio', 'categories'));
    }

    public function update( $request, $id)
    {
        try {
            $portfolio = $this->portfolio->findOrFail($id);
            $new_cover = $request->file('cover');

            if ($new_cover) {
                if ($portfolio->cover && file_exists(storage_path('images/portfolio' . $portfolio->cover))) {
                    \Storage::delete('public/' . $portfolio->cover);
                }
                $new_cover_path = $new_cover->store('images/portfolio', 'public');
                $portfolio->cover = $new_cover_path;
            }
            $portfolio->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $portfolio->client = ['en' => $request['client_en'], 'ar' => $request['client_ar']];
            $portfolio->desc = ['en' => $request['desc_en'], 'ar' => $request['desc_ar']];
            $portfolio->slug = $request['slug'];
            $portfolio->is_active = 1;
            $portfolio->date = $request['date'];
            $portfolio->pcategory_id = $request['category'];
            $portfolio->link = $request['link'];
            DB::beginTransaction();
            // //create the default language's portfolio
            $portfolio->update();
            if ($request->hasFile('images'))
                UploadService::update($request, $portfolio->id);
            DB::commit();
            return redirect()->route('admin.portfolio')->with('success', 'Data updated successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.portfolio.edit')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $portfolio = $this->portfolio->findOrFail($id);
        $portfolio->delete();

        return redirect()->route('admin.portfolio')->with('success', 'Data deleted successfully');
    }
}
