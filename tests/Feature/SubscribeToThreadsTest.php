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

        $this->post($thread->path() . '/subscribe');

        $this->assertDatabaseHas('thread_subscriptions', [
            'user_id'   => auth()->id(),
            'thread_id' => $thread->id,
        ]);
    }

    /** @test */
    public function guests_cannot_subscribe_to_a_thread()
    {
        $this->post("/threads/1/subscribe")
            ->assertRedirect('login');
    }

    /** @test */
    public function an_authenticated_user_cannot_subscribe_two_times_to_a_thread()
    {
        $this->signin();

        $thread = create(Thread::class);

        try {
            $this->subscribe($thread);
            $this->subscribe($thread);
        } catch(\Exception $e) {
            $this->fail('You cannot subscribe to a thread more than once');
        }

        $this->assertCount(1, $thread->subscriptions);
    }

    public function subscribe($thread)
    {
        $this->post("/threads/{$thread->id}/subscribe");

        return $thread;
    }
}
