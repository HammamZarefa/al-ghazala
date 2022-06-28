<?php

namespace App\Service\Portfolio;

use App\Http\Requests\Portfolio\PortfolioRequest;
use App\Manager\Portfolio\PortfolioManager;
use Illuminate\Http\Request;

class PortfolioService
{
    private $portfolioManager;
    public function __construct(PortfolioManager $portfolioManager)
    {
        $this->portfolioManager = $portfolioManager;
    }
    public function index(){
        return $this->portfolioManager->index();
    }

    public function create(){
        return $this->portfolioManager->create();
    }

    public function store( $request){
        return $this->portfolioManager->store($request);
    }

    public function show($id){
        return $this->portfolioManager->show($id);
    }

    public function edit($id){
        return $this->portfolioManager->edit($id);
    }

    public function update( $request,$id){
        return $this->portfolioManager->update($request,$id);
    }

    public function destroy($id){
        return $this->portfolioManager->destroy($id);
    }
}
