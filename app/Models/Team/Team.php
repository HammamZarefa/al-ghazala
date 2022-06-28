<?php

namespace App\Models\Team;

use App\Scopes\TeamScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='teams';
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $fillable = [
        'photo',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'is_active','name','position','qoute','local'
    ];
    protected static function booted()
    {
        parent::booted();
//        static::addGlobalScope(new TeamScope);
    }
//    public function TeamTranslation()
//    {
//        return $this->hasMany(TeamTranslation::class);
//    }
}
