<?php

namespace App\Policies;

use App\User;
use App\Actualite;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActualitePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if($user->role === 1)
        {
            return true;
        }
        return null;
    }

    public function updateAndDelete(User $user, Actualite $actualite)
    {
        return $user->id === $actualite->user_id;
    }


}
