<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\Portfolio\PortfolioRequest;
use Illuminate\Http\Request;

interface PortfolioRepositoryInterface{

    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update( $request,$id);

    public function destroy($id);
}
