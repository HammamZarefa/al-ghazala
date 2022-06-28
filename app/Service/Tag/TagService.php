<?php

namespace App\Service\Tag;

use App\Http\Requests\Tag\TagRequest;
use App\Manager\Tag\TagManager;
use Illuminate\Http\Request;

class TagService
{
    private $tagManager;
    public function __construct(TagManager $tagManager)
    {
        $this->tagManager = $tagManager;
    }
    public function index(){
        return $this->tagManager->index();
    }

    public function create(){
        return $this->tagManager->create();
    }

    public function store(Request $request){
        return $this->tagManager->store($request);
    }

    public function show($id){
        return $this->tagManager->show($id);
    }

    public function edit($id){
        return $this->tagManager->edit($id);
    }

    public function update($id, TagRequest $request){
        return $this->tagManager->update($id,$request);
    }

    public function destroy($id){
        return $this->tagManager->destroy($id);
    }
}
