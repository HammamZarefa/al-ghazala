<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Page\PageRequest;
use Illuminate\Http\Request;

interface PageRepositoryInterface{

    public function index();

    public function create();

    public function store(PageRequest $request);

    public function show($id);

    public function edit($id);

    public function update(PageRequest $request,$id);

    public function destroy($id);
}
