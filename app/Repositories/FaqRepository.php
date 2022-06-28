<?php

namespace App\Repositories;

use App\Http\Requests\Faq\FaqRequest;
use App\Models\Faq\Faq;
use App\Models\Faq\FaqTranslation;
use App\Repositories\Interfaces\FaqRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqRepository implements FaqRepositoryInterface{

    private $request;
    private $faq;
    private $faqTranslation;
    public function __construct(Faq $faq, FaqTranslation $faqTranslation, Request $request)
    {
        $this->request = $request;
        $this->faq = $faq;
        $this->faqTranslation = $faqTranslation;
    }

    public function index()
    {
        $faq = Faq::orderBy('id','desc')->get();

        return view('admin.faq.index',compact('faq'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(FaqRequest $request)
    {
//        dd($request);
        try{
           $faq = new Faq();
            $faq->question = ['en' => $request['question_en'], 'ar' => $request['question_ar']];
            $faq->answer = ['en' => $request['answer_en'], 'ar' => $request['answer_ar']];
            $faq->is_active = 1;

            DB::beginTransaction();
            // create the default language's banner
           $faq->save();
            DB::commit();

            return redirect()->route('admin.faq')->with('success', 'Data added successfully');
        }catch(\Exception $ex){
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.faq.create')->with('error', 'Data failed to add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faq.edit',compact('faq'));
    }

    public function update(FaqRequest $request,$id)
    {
        try{

            $faq = $this->faq->find($id);
            $faq->question = ['en' => $request['question_en'], 'ar' => $request['question_ar']];
            $faq->answer = ['en' => $request['answer_en'], 'ar' => $request['answer_ar']];
            $faq->is_active = 1;
            DB::beginTransaction();
           $faq->update();
            DB::commit();
            return redirect()->route('admin.faq')->with('success', 'Data updated successfully');
        }catch(\Exception $ex){
            DB::rollback();
            // return $ex->getMessage();
            return redirect()->route('admin.faq.create')->with('error', 'Data failed to update');
        }
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        return redirect()->route('admin.faq')->with('success', 'Data deleted successfully');
    }
}
