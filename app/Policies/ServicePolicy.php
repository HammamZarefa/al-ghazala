<?php

namespace App\Policies;

use App\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Traits\GeneralTrait;

class ServicePolicy
{
    use GeneralTrait;
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        return $this->author('service-list',$user);
    }

    public function view(User $user)
    {
        return $this->author('service-list',$user);
    }

    public function create(User $user)
    {
        return $this->author('service-create',$user);
    }

    public function update(User $user)
    {
        return $this->author('service-update',$user);
    }

    public function delete(User $user)
    {
        return $this->author('service-delete',$user);
    }

    public function restore(User $user)
    {
        return $this->author('service-delete',$user);
    }

    public function forceDelete(User $user)
    {
        return $this->author('service-delete',$user);
    }
}
