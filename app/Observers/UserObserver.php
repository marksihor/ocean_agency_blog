<?php

namespace App\Observers;

use App\Events\UserCreatedEvent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserObserver
{
    public function creating(User $user): void
    {
        $user->password = Hash::make($user->password);
    }

    public function created(User $user): void
    {
        UserCreatedEvent::dispatch($user);
    }
}
