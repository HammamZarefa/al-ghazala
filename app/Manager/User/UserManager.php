<?php

namespace App\Manager\User;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserManager
{
    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository=$userRepository;
    }

    public function index(){
        return $this->userRepository->index();
    }

    public function create(){
        return $this->userRepository->create();
    }

    public function store(Request $request){
        return $this->userRepository->store($request);
    }

    public function show($id){
        return $this->userRepository->show($id);
    }

    public function edit($id){
        return $this->userRepository->edit($id);
    }

    public function update(Request $request, $id){
        return $this->userRepository->update($id,$request);
    }

    public function changepassword(Request $request, $id){
        return $this->userRepository->changepassword($id,$request);
    }

    public function destroy($id){
        return $this->userRepository->destroy($id);
    }
}
