<?php

namespace App\Service\Testimonial;

use App\Manager\Testimonial\TestimonialManager;
use Illuminate\Http\Request;

class TestimonialService
{
    private $testimonialManager;
    public function __construct(TestimonialManager $testimonialManager)
    {
        $this->testimonialManager = $testimonialManager;
    }
    public function index(){
        return $this->testimonialManager->index();
    }

    public function create(){
        return $this->testimonialManager->create();
    }

    public function store(Request $request){
        return $this->testimonialManager->store($request);
    }

    public function show($id){
        return $this->testimonialManager->show($id);
    }

    public function edit($id){
        return $this->testimonialManager->edit($id);
    }

    public function update($id){
        return $this->testimonialManager->update($id);
    }

    public function destroy($id){
        return $this->testimonialManager->destroy($id);
    }
}
