<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService=$userService;
    }
    public function index()
    {
        return $this->userService->index();
    }

    public function create(){
        return $this->userService->create();
    }

    public function store(Request $request){
        return $this->userService->store($request);
    }

    public function show($id){
        return $this->userService->show($id);
    }

    public function edit($id){
        return $this->userService->edit($id);
    }

    public function update(Request $request, $id){
        return $this->userService->update($request, $id);
    }

    public function changepassword(Request $request, $id){
        return $this->userService->changepassword($id,$request);
    }

    public function destroy($id){
        return $this->userService->destroy($id);
    }
}
