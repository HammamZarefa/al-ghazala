<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Link\LinkRequest;
use Illuminate\Http\Request;

interface LinkRepositoryInterface{

    public function index();

    public function create();

    public function store(LinkRequest $request);

    public function show($id);

    public function edit($id);

    public function update(LinkRequest $request,$id);

    public function destroy($id);
}
