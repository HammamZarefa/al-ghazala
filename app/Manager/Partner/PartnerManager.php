<?php

namespace App\Manager\Partner;

use App\Http\Requests\Partner\PartnerRequest;
use App\Repositories\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;

class PartnerManager
{
    private $partnerRepository;
    public function __construct(PartnerRepositoryInterface $partnerRepository)
    {
        $this->partnerRepository=$partnerRepository;
    }
    public function index(){
        return $this->partnerRepository->index();
    }

    public function create(){
        return $this->partnerRepository->create();
    }

    public function store(PartnerRequest $request){
        return $this->partnerRepository->store($request);
    }

    public function show($id){
        return $this->partnerRepository->show($id);
    }

    public function edit($id){
        return $this->partnerRepository->edit($id);
    }

    public function update(PartnerRequest $request,$id){
        return $this->partnerRepository->update($request,$id);
    }

    public function destroy($id){
        return $this->partnerRepository->destroy($id);
    }
}
