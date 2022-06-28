<?php

namespace App\Manager\Tag;

use App\Http\Requests\Tag\TagRequest;
use App\Repositories\Interfaces\TagRepositoryInterface;
use Illuminate\Http\Request;

class TagManager
{
    private $tagRepository;
    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository=$tagRepository;
    }
    public function index(){
        return $this->tagRepository->index();
    }

    public function create(){
        return $this->tagRepository->create();
    }

    public function store(Request $request){
        return $this->tagRepository->store($request);
    }

    public function show($id){
        return $this->tagRepository->show($id);
    }

    public function edit($id){
        return $this->tagRepository->edit($id);
    }

    public function update($id, TagRequest $request){
        return $this->tagRepository->update($id,$request);
    }

    public function destroy($id){
        return $this->tagRepository->destroy($id);
    }
}
