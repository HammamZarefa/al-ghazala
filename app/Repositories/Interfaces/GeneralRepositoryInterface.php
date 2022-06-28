<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\General\GeneralRequest;
use Illuminate\Http\Request;

interface GeneralRepositoryInterface{

    public function dashboard();

    public function general();

    public function generalUpdate( $request);

    public function about();

    public function aboutUpdate(AboutRequest $request);
}
