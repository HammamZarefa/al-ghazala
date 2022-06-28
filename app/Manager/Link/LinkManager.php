<?php

namespace App\Manager\Link;

use App\Http\Requests\Link\LinkRequest;
use App\Repositories\Interfaces\LinkRepositoryInterface;
use Illuminate\Http\Request;

class LinkManager
{
    private $linkRepository;
    public function __construct(LinkRepositoryInterface $linkRepository)
    {
        $this->linkRepository=$linkRepository;
    }
    public function index(){
        return $this->linkRepository->index();
    }

    public function create(){
        return $this->linkRepository->create();
    }

    public function store(LinkRequest $request){
        return $this->linkRepository->store($request);
    }

    public function show($id){
        return $this->linkRepository->show($id);
    }

    public function edit($id){
        return $this->linkRepository->edit($id);
    }

    public function update(LinkRequest $request,$id){
        return $this->linkRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->linkRepository->destroy($id);
    }
}
