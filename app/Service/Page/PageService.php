<?php

namespace App\Service\Page;

use App\Http\Requests\Page\PageRequest;
use App\Manager\Page\PageManager;
use Illuminate\Http\Request;

class PageService
{
    private $pageManager;
    public function __construct(PageManager $pageManager)
    {
        $this->pageManager = $pageManager;
    }
    public function index(){
        return $this->pageManager->index();
    }

    public function create(){
        return $this->pageManager->create();
    }

    public function store(PageRequest $request){
        return $this->pageManager->store($request);
    }

    public function show($id){
        return $this->pageManager->show($id);
    }

    public function edit($id){
        return $this->pageManager->edit($id);
    }

    public function update(PageRequest $request,$id){
        return $this->pageManager->update($request,$id);
    }

    public function destroy($id){
        return $this->pageManager->destroy($id);
    }
}
