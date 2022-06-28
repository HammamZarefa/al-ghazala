<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Service\ServiceRequest;
use Illuminate\Http\Request;

interface ServiceRepositoryInterface{

    public function index();

    public function create();

    public function store(ServiceRequest $request);

    public function show($id);

    public function edit($id);

    public function update(ServiceRequest $request,$id);

    public function destroy($id);
}
