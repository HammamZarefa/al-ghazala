<?php

namespace App\Policies;

use App\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Traits\GeneralTrait;

class GeneralPolicy
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
        return $this->author('setting-list',$user);
    }

    public function view(User $user)
    {
        return $this->author('setting-list',$user);
    }

    public function create(User $user)
    {
    }

    public function update(User $user)
    {
        return $this->author('setting-update',$user);
    }

    public function delete(User $user)
    {
    }

    public function restore(User $user)
    {
    }

    public function forceDelete(User $user)
    {
    }
}
