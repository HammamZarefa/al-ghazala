<?php

namespace App\Repositories;

use App\Http\Requests\Team\TeamRequest;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Team\Team;
use App\Models\Team\TeamTranslation;
use App\Models\User\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class TeamRepository implements TeamRepositoryInterface{

    private $team;
    private $teamTranslation;
    private $user;
    public function __construct(User $user, Team $team , TeamTranslation $teamTranslation)
    {
        $this->user = $user;
        $this->team = $team;
        $this->teamTranslation = $teamTranslation;
    }

    public function index()
    {
        Gate::authorize('team-list',$this->user);

        return $this->team::orderBy('id','desc')->get();
    }

    public function create()
    {
        Gate::authorize('team-create',$this->user);
    }

    public function store(TeamRequest $request)
    {
        try {
            Gate::authorize('team-create',$this->user);

            /** transformation to collection */
            $allteams = collect($request->team)->all();

            $request->is_active ? $is_active = true : $is_active = false;

            $photo = $request->file('photo');
            if($photo){
                $cover_path = $photo->store('images/team', 'public');
            }

            DB::beginTransaction();
            // //create the default language's team
            $unTransTeam_id = $this->team->insertGetId([
                'facebook' => $request['facebook'],
                'twitter' => $request['twitter'],
                'instagram' => $request['instagram'],
                'linkedin' => $request['linkedin'],
                'is_active' => $request->is_active = 1,
                'photo' => $cover_path,
            ]);

            //check the Team and request
            if (isset($allteams) && count($allteams)) {
                //insert other traslations for Teams
                foreach ($allteams as $allteam) {
                    $transTeam_arr[] = [
                        'name' => $allteam ['name'],
                        'local' => $allteam['local'],
                        'position' => $allteam['position'],
                        'qoute' => $allteam['qoute'],
                        'team_id' => $unTransTeam_id
                    ];
                }
                $this->teamTranslation->insert($transTeam_arr);
            }
            DB::commit();

            return redirect()->route('admin.team')->with('success', 'Data added successfully');

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.team.create')->with('error', 'Data failed to add');
        }
    }
    public function show($id)
    {
        Gate::authorize('team-list',$this->user);
    }

    public function edit($id)
    {
        Gate::authorize('team-update',$this->user);
        return $this->team::findOrFail($id);
    }

    public function update(TeamRequest $request, $id)
    {
        try{
            Gate::authorize('team-update',$this->user);

            $team = $this->team::findOrFail($id);

            $photo = $request->file('photo');
            if($photo){
                if($request->photo && file_exists(storage_path('app/public/' .$request->photo))){
                    Storage::delete('public/'. $request->photo);
                }
                $cover_path = $photo->store('images/team', 'public');
            }

            DB::beginTransaction();
            // //create the default language's team
            $unTransTeam_id = $this->team->where('teams.id', $team->id)
                ->update([
                'facebook' => $request['facebook'],
                'twitter' => $request['twitter'],
                'instagram' => $request['instagram'],
                'linkedin' => $request['linkedin'],
                'is_active' => $request->is_active = 1,
                'photo' => $cover_path,
            ]);

            $allteams = array_values($request->team);
                //insert other traslations for Teams
                foreach ($allteams as $allteam) {
                    $this->teamTranslation->where('team_id', $id)
                    ->where('local', $allteam['local'])
                    ->update([
                        'name' => $allteam ['name'],
                        'local' => $allteam['local'],
                        'position' => $allteam['position'],
                        'qoute' => $allteam['qoute'],
                        'team_id' => $team->id
                    ]);
                }
            DB::commit();
            return redirect()->route('admin.team')->with('success', 'Data updated successfully');
        }catch(\Exception $ex){
            DB::rollback();
            return $ex->getMessage();
            return redirect()->route('admin.team.edit')->with('error', 'Data failed to update');
        }

    }

    public function destroy($id)
    {
        Gate::authorize('team-delete',$this->user);
        $team = $this->team::findOrFail($id);

        $team->delete();

        return redirect()->route('admin.team')->with('success', 'Data deleted successfully');


    }
}
