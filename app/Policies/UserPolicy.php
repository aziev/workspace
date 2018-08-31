<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
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

    public function before($authenticatedUser)
    {
        if ($authenticatedUser->is_admin) {
            return true;
        }
    }

    /**
     * Determine if the given user can be updated by the user.
     *
     * @param  \App\User $authenticatedUser
     * @param \App\User $user
     * @return bool
     */
    public function update(User $authenticatedUser, User $user)
    {
        return false;
    }
}
