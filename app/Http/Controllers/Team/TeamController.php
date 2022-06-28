<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Team\TeamRequest;
use App\Models\User\User;
use App\Service\Team\TeamService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $teamService;
    private $user;
    public function __construct(User $user,TeamService $teamService)
    {
        $this->teamService = $teamService;
        $this->user = $user;
        $this->middleware('can:team-list')->only('index','show');
        $this->middleware('can:team-create')->only('create','store');
        $this->middleware('can:team-update')->only('edit','update');
        $this->middleware('can:team-delete')->only('destroy');
    }

    public function index()
    {
        $team = $this->teamService->index();
        return view('admin.team.index',compact('team'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $team = $this->teamService->create();
        return view('admin.team.create',compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request){
        return $this->teamService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return $this->teamService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $team = $this->teamService->edit($id);
        return view('admin.team.edit',compact('team'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id){
        return $this->teamService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        return $this->teamService->destroy($id);
    }
}
