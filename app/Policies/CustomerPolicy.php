<?php

namespace App\Policies;

use App\Models\Customer;
use App\Models\User;

class CustomerPolicy
{
    public function view(User $user, Customer $customer)
    {
        return $user->is_owner || $user->id === $customer->seller_id;
    }
}
