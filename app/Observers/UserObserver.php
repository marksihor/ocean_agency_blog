<?php

namespace App\Observers;

use App\Events\UserCreatedEvent;
use App\Models\User;

class UserObserver
{
    public function created(User $user): void
    {
        UserCreatedEvent::dispatch($user);
    }
}
