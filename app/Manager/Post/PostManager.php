<?php

namespace App\Manager\Post;

use App\Http\Requests\Post\PostRequest;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostManager
{
    private $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository=$postRepository;
    }
    public function index(){
        return $this->postRepository->index();
    }

    public function create(){
        return $this->postRepository->create();
    }

    public function store(PostRequest $request){
        return $this->postRepository->store($request);
    }

    public function show($id){
        return $this->postRepository->show($id);
    }

    public function edit($id){
        return $this->postRepository->edit($id);
    }

    public function update(PostRequest $request,$id){
        return $this->postRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->postRepository->destroy($id);
    }

    public function trash(){
        return $this->postRepository->trash();
    }

    public function restore($id){
        return $this->postRepository->restore($id);
    }

    public function deletePermanent($id){
        return $this->postRepository->deletePermanent($id);
    }
}
