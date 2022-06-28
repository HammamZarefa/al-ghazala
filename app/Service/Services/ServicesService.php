<?php

namespace App\Service\Services;

use App\Http\Requests\Service\ServiceRequest;
use App\Manager\Service\ServiceManager;
use Illuminate\Http\Request;

class ServicesService
{
    private $serviceManager;
    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }
    public function index(){
        return $this->serviceManager->index();
    }

    public function create(){
        return $this->serviceManager->create();
    }

    public function store(ServiceRequest $request){
        return $this->serviceManager->store($request);
    }

    public function show($id){
        return $this->serviceManager->show($id);
    }

    public function edit($id){
        return $this->serviceManager->edit($id);
    }

    public function update(ServiceRequest $request, $id){
        return $this->serviceManager->update($request,$id);
    }

    public function destroy($id){
        return $this->serviceManager->destroy($id);
    }

}
