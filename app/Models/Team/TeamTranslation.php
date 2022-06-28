<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    use HasFactory;
    protected $table='team_translation';
    protected $fillable=['id','team_id','name','position','qoute','local'];
    protected $hidden=['team_id','local'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
