<?php

namespace App\Policies;

use App\Models\User\User;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
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
        return $this->author('page-list',$user);
    }

    public function view(User $user)
    {
        return $this->author('page-list',$user);
    }

    public function create(User $user)
    {
        return $this->author('page-create',$user);
    }

    public function update(User $user)
    {
        return $this->author('page-update',$user);
    }

    public function delete(User $user)
    {
        return $this->author('page-delete',$user);
    }

    public function restore(User $user)
    {
        return $this->author('page-delete',$user);
    }

    public function forceDelete(User $user)
    {
        return $this->author('page-delete',$user);
    }
}
