<?php

namespace App\Manager\Testimonial;

use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use Illuminate\Http\Request;

class TestimonialManager
{
    private $testimonialRepository;
    public function __construct(TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->testimonialRepository=$testimonialRepository;
    }
    public function index(){
        return $this->testimonialRepository->index();
    }

    public function create(){
        return $this->testimonialRepository->create();
    }

    public function store(Request $request){
        return $this->testimonialRepository->store($request);
    }

    public function show($id){
        return $this->testimonialRepository->show($id);
    }

    public function edit($id){
        return $this->testimonialRepository->edit($id);
    }

    public function update($id){
        return $this->testimonialRepository->update($id);
    }

    public function destroy($id){
        return $this->testimonialRepository->destroy($id);
    }
}
