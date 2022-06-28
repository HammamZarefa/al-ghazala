<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class,'users_roles','user_id', 'role_id','id','id');

    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions','role_id', 'permission_id','id','id');

    }
}
