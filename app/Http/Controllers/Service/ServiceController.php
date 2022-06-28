<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\ServiceRequest;
use App\Service\Services\ServicesService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $servicesService;
    public function __construct(ServicesService $servicesService)
    {
        $this->servicesService=$servicesService;
    }
    public function index(){
        return $this->servicesService->index();
    }

    public function create(){
        return $this->servicesService->create();
    }

    public function store(ServiceRequest $request){
        return $this->servicesService->store($request);
    }

    public function show($id){
        return $this->servicesService->show($id);
    }

    public function edit($id){
        return $this->servicesService->edit($id);
    }

    public function update(ServiceRequest $request, $id){
        return $this->servicesService->update($request, $id);
    }

    public function destroy($id){
        return $this->servicesService->destroy($id);
    }
}
