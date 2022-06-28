<?php

namespace App\Repositories;

use App\Http\Requests\PCategory\PCategoryRequest;
use App\Models\Pcategory\Pcategory;
use App\Models\Pcategory\PcategoryTranslation;
use App\Repositories\Interfaces\PcategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PcategoryRepository implements PcategoryRepositoryInterface
{

    private $request;
    private $pcategory;
    private $pcategoryTranslation;

    public function __construct(Pcategory $pcategory, PcategoryTranslation $pcategoryTranslation, Request $request)
    {
        $this->request = $request;
        $this->pcategory = $pcategory;
        $this->pcategoryTranslation = $pcategoryTranslation;
    }

    public function index()
    {
        $pcategory = $this->pcategory::orderBy('id', 'desc')->get();

        return view('admin.pcategory.index', compact('pcategory'));
    }


    public function store(PCategoryRequest $request)
    {
//        dd($request);
        try {
            $pcategory = new Pcategory();
            $pcategory->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $pcategory->is_active = 1;
            DB::beginTransaction();
            $pcategory->save();
            DB::commit();

            return redirect()->route('admin.pcategory')->with('success', 'Data added successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.pcategory')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pcategory = $this->pcategory::findOrFail($id);

        return view('admin.pcategory.edit', compact('pcategory'));
    }

    public function update(PCategoryRequest $request, $id)
    {
        try {

            $pcategory = $this->pcategory::findOrFail($id);
            $pcategory->name = ['en' => $request['name_en'], 'ar' => $request['name_ar']];
            $pcategory->is_active = 1;
            DB::beginTransaction();

            $pcategory->update();
            DB::commit();
            return redirect()->route('admin.pcategory')->with('success', 'Data updated successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.pcategory.create')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $pcategory = $this->pcategory::findOrFail($id);
        $pcategory->delete();

        return redirect()->route('admin.pcategory')->with('success', 'Data deleted successfully');
    }
}
