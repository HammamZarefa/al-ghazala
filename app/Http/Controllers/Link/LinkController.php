<?php

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;
use App\Http\Requests\Link\LinkRequest;
use App\Service\Link\LinkService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    private $linkService;
    public function __construct(LinkService $linkService)
    {
        $this->linkService=$linkService;
    }
    public function index(){
        return $this->linkService->index();
    }

    public function create(){
        return $this->linkService->create();
    }

    public function store(LinkRequest $request){
        return $this->linkService->store($request);
    }

    public function show($id){
        return $this->linkService->show($id);
    }

    public function edit($id){
        return $this->linkService->edit($id);
    }

    public function update(LinkRequest $request,$id){
        return $this->linkService->update($request,$id);
    }

    public function destroy($id){
        return $this->linkService->destroy($id);
    }
}
