<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface{
    
    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update($request, $id);

    public function changepassword($request, $id);

    public function destroy($id);
}
