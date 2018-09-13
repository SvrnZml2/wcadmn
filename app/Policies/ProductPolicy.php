<?php

namespace App\Policies;

use App\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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

    public function updateAndDelete(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }
}
