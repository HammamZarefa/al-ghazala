<?php

namespace App\Manager\Team;

use App\Http\Requests\Team\TeamRequest;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use Illuminate\Http\Request;

class TeamManager
{
    private $teamRepository;
    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository=$teamRepository;
    }
    public function index()
    {
        return $this->teamRepository->index();
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return $this->teamRepository->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request){
        return $this->teamRepository->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return $this->teamRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return $this->teamRepository->edit($id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id){
        return $this->teamRepository->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        return $this->teamRepository->destroy($id);
    }
}
