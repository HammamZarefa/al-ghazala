<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use App\Service\Testimonial\TestimonialService;
use Illuminate\Http\Request;


class TestimonialController extends Controller
{
    private $testimonialService;
    public function __construct(TestimonialService $testimonialService)
    {
        $this->testimonialService=$testimonialService;
    }
    public function index(){
        return $this->testimonialService->index();
    }

    public function create(){
        return $this->testimonialService->create();
    }

    public function store(Request $request){
        return $this->testimonialService->store($request);
    }

    public function show($id){
        return $this->testimonialService->show($id);
    }

    public function edit($id){
        return $this->testimonialService->edit($id);
    }

    public function update($id){
        return $this->testimonialService->update($id);
    }

    public function destroy($id){
        return $this->testimonialService->destroy($id);
    }
}
