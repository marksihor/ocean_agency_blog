<?php

namespace App\Listeners\UserCreatedEvent;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DoAnyLogicInBackground implements ShouldQueue
{
    public function handle(UserCreatedEvent $event): void
    {
        logger()->info("Do any logic in background on UserCreatedEvent");
    }
}
