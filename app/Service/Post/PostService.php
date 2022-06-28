<?php

namespace App\Service\Post;

use App\Http\Requests\Post\PostRequest;
use App\Manager\Post\PostManager;
use Illuminate\Http\Request;

class PostService
{
    private $postManager;
    public function __construct(PostManager $postManager)
    {
        $this->postManager = $postManager;
    }
    public function index(){
        return $this->postManager->index();
    }

    public function create(){
        return $this->postManager->create();
    }

    public function store(PostRequest $request){
        return $this->postManager->store($request);
    }

    public function show($id){
        return $this->postManager->show($id);
    }

    public function edit($id){
        return $this->postManager->edit($id);
    }

    public function update(PostRequest $request,$id){
        return $this->postManager->update($request,$id);
    }

    public function destroy($id){
        return $this->postManager->destroy($id);
    }
    public function trash(){
        return $this->postManager->trash();
    }

    public function restore($id){
        return $this->postManager->restore($id);
    }

    public function deletePermanent($id){
        return $this->postManager->deletePermanent($id);
    }
}
