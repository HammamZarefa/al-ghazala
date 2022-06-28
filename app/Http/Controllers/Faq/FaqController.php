<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\FaqRequest;
use Illuminate\Http\Request;
use App\Service\Faq\FaqService;

class FaqController extends Controller
{
    private $faqService;
    public function __construct(FaqService $faqService)
    {
        $this->faqService=$faqService;
    }
    public function index(){
        return $this->faqService->index();
    }

    public function create(){
        return $this->faqService->create();
    }

    public function store(FaqRequest $request){
        return $this->faqService->store($request);
    }

    public function show($id){
        return $this->faqService->show($id);
    }

    public function edit($id){
        return $this->faqService->edit($id);
    }

    public function update(FaqRequest $request,$id){
        return $this->faqService->update($request,$id);
    }

    public function destroy($id){
        return $this->faqService->destroy($id);
    }
}
