<?php

namespace App\Service\Team;

use App\Http\Requests\Team\TeamRequest;
use App\Manager\Team\TeamManager;
use Illuminate\Http\Request;

class TeamService
{
    private $teamManager;
    public function __construct(TeamManager $teamManager)
    {
        $this->teamManager=$teamManager;
    }
    public function index()
    {
        return $this->teamManager->index();
    }

    public function create(){
        return $this->teamManager->create();
    }

    public function store(TeamRequest $request){
        return $this->teamManager->store($request);
    }

    public function show($id){
        return $this->teamManager->show($id);
    }

    public function edit($id){
        return $this->teamManager->edit($id);
    }

    public function update(TeamRequest $request, $id){
        return $this->teamManager->update($request, $id);
    }

    public function destroy($id){
        return $this->teamManager->destroy($id);
    }
}
