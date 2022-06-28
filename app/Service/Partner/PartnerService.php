<?php

namespace App\Service\Partner;

use App\Http\Requests\Partner\PartnerRequest;
use App\Manager\Partner\PartnerManager;
use Illuminate\Http\Request;

class PartnerService
{
    private $partnerManager;
    public function __construct(PartnerManager $partnerManager)
    {
        $this->partnerManager = $partnerManager;
    }
    public function index(){
        return $this->partnerManager->index();
    }

    public function create(){
        return $this->partnerManager->create();
    }

    public function store(PartnerRequest $request){
        return $this->partnerManager->store($request);
    }

    public function show($id){
        return $this->partnerManager->show($id);
    }

    public function edit($id){
        return $this->partnerManager->edit($id);
    }

    public function update(PartnerRequest $request,$id){
        return $this->partnerManager->update($request,$id);
    }

    public function destroy($id){
        return $this->partnerManager->destroy($id);
    }
}
