<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Service\Post\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $faqService;
    public function __construct(PostService $postService)
    {
        $this->postService=$postService;
    }
    public function index(){
        return $this->postService->index();
    }

    public function create(){
        return $this->postService->create();
    }

    public function store(PostRequest $request){
        return $this->postService->store($request);
    }

    public function show($id){
        return $this->postService->show($id);
    }

    public function edit($id){
        return $this->postService->edit($id);
    }

    public function update(PostRequest $request,$id){
        return $this->postService->update($request,$id);
    }

    public function destroy($id){
        return $this->postService->destroy($id);
    }
    public function trash(){
        return $this->postService->trash();
    }
    public function restore($id){
        return $this->postService->restore($id);
    }
    public function deletePermanent($id){
        return $this->postService->deletePermanent($id);
    }
}
