<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Reply;
use App\Thread;

class CreateRepliesTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function an_authenticated_user_can_reply_a_thread()
    {
        $this->signin();

        $thread = create(Thread::class);
        $reply = raw(Reply::class);

        $this->post("/threads/{$thread->id}/reply", $reply)
            ->assertRedirect($thread->path());

        $this->assertDatabaseHas('replies', [
            'user_id' => auth()->id(),
            'thread_id' => $thread->id,
            'body' => $reply['body'],
        ]);
    }
}
