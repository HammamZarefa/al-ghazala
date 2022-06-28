<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Tag\TagRequest;
use Illuminate\Http\Request;

interface TagRepositoryInterface{

    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update($id, TagRequest $request);

    public function destroy($id);
}
