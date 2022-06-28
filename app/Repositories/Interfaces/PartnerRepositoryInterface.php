<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Partner\PartnerRequest;
use Illuminate\Http\Request;

interface PartnerRepositoryInterface{

    public function index();

   public function create();

   public function store(PartnerRequest $request);

   public function show($id);

   public function edit($id);

   public function update(PartnerRequest $request,$id);

   public function destroy($id);
}
