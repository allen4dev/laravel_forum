<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\User;

class SubscribeToThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_subscribe_to_a_thread()
    {
        $this->signin();
        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);

        $this->signin(create(User::class));

        $this->post("/threads/{$thread->id}/subscribe");

        $this->assertDatabaseHas('thread_subscriptions', [
            'user_id'   => auth()->id(),
            'thread_id' => $thread->id,
        ]);
    }
}
