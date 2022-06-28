<?php

namespace App\Service\Link;

use App\Http\Requests\Link\LinkRequest;
use App\Manager\Link\LinkManager;
use Illuminate\Http\Request;

class LinkService
{
    private $linkManager;
    public function __construct(LinkManager $linkManager)
    {
        $this->linkManager = $linkManager;
    }
    public function index(){
        return $this->linkManager->index();
    }

    public function create(){
        return $this->linkManager->create();
    }

    public function store(LinkRequest $request){
        return $this->linkManager->store($request);
    }

    public function show($id){
        return $this->linkManager->show($id);
    }

    public function edit($id){
        return $this->linkManager->edit($id);
    }

    public function update(LinkRequest $request,$id){
        return $this->linkManager->update($request,$id);
    }

    public function destroy($id){
        return $this->linkManager->destroy($id);
    }
}
