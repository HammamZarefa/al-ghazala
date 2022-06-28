<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Banner\BannerRequest;
use Illuminate\Http\Request;

interface BannerRepositoryInterface{

    public function index();

    public function create();

    public function store(BannerRequest $request);

    public function show($id);

    public function edit($id);

    public function update(BannerRequest $request, $id);

    public function destroy($id);
}
