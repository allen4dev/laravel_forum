<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\DatabaseNotification;

use App\Thread;
use App\User;

class NotificationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_is_notified_when_a_subscribed_thread_receives_a_new_reply()
    {
        $this->signin(create(User::class));
        
        $user = auth()->user();

        $thread = create(Thread::class);
        
        $thread->subscribe();
        
        $this->signin(create(User::class));
        $thread->addReply([ 'body' => 'Some reply' ]);
        
        $this->assertCount(1, $user->fresh()->notifications);
    }
}
