<?php

namespace App\Policies;

use App\User;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function view(User $user, Admin $admin)
    {
        //
        return in_array($user->role_id, [
            '1',
            ]);
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return in_array($user->role_id, [
            '1',
        ]);
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function update(User $user, Admin $admin)
    {
        //
        return in_array($user->role_id, [
            '1',
        ]);
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function delete(User $user, Admin $admin)
    {
        //
        return in_array($user->role_id, [
            '1',
        ]);
    }

    /**
     * Determine whether the user can restore the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function restore(User $user, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function forceDelete(User $user, Admin $admin)
    {
        //
    }
}
