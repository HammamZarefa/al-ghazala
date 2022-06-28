<?php

namespace App\Manager\Page;

use App\Http\Requests\Page\PageRequest;
use App\Repositories\Interfaces\PageRepositoryInterface;
use Illuminate\Http\Request;

class PageManager
{
    private $pageRepository;
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository=$pageRepository;
    }
    public function index(){
        return $this->pageRepository->index();
    }

    public function create(){
        return $this->pageRepository->create();
    }

    public function store(PageRequest $request){
        return $this->pageRepository->store($request);
    }

    public function show($id){
        return $this->pageRepository->show($id);
    }

    public function edit($id){
        return $this->pageRepository->edit($id);
    }

    public function update(PageRequest $request, $id){
        return $this->pageRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->pageRepository->destroy($id);
    }
}
