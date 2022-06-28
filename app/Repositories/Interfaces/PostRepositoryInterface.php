<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Post\PostRequest;
use Illuminate\Http\Request;

interface PostRepositoryInterface{

    public function index();

    public function create();

    public function store(PostRequest $request);

    public function show($id);

    public function edit($id);

    public function update(PostRequest $request,$id);

    public function destroy($id);

    public function trash();

    public function restore($id);

    public function deletePermanent($id);
}
