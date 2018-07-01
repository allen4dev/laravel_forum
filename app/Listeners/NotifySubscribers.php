<?php

namespace App\Listeners;

use App\Events\ThreadWasReplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Notifications\ThreadWasUpdated;

class NotifySubscribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ThreadWasReplied  $event
     * @return void
     */
    public function handle(ThreadWasReplied $event)
    {
        $event->thread->subscriptions()
            ->where('user_id', '!=', $event->reply->user_id)
            ->each(function ($record) use ($event){
                $record->user->notify(new ThreadWasUpdated($event->reply, $event->thread));
            });
    }
}
