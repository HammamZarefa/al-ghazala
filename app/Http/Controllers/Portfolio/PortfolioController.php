<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\PortfolioRequest;
use App\Service\Portfolio\PortfolioService;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    private $portfolioService;
    public function __construct(PortfolioService $portfolioService)
    {
        $this->portfolioService=$portfolioService;
    }
    public function index(){
        return $this->portfolioService->index();
    }

    public function create(){
        return $this->portfolioService->create();
    }

    public function store(Request $request){
        return $this->portfolioService->store($request);
    }

    public function show($id){
        return $this->portfolioService->show($id);
    }

    public function edit($id){
        return $this->portfolioService->edit($id);
    }

    public function update(Request $request,$id){
        return $this->portfolioService->update($request,$id);
    }

    public function destroy($id){
        return $this->portfolioService->destroy($id);
    }
}
