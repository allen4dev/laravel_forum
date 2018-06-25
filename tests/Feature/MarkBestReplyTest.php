<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;
use App\User;

class MarkBestReplyTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function a_thread_creator_can_mark_a_best_reply_by_his_thread()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        $this->post("/replies/{$reply->id}/best-reply")
            ->assertRedirect("/threads/{$thread->id}");
        
        $this->assertEquals($thread->fresh()->best_reply, $reply->id);
    }

    /** @test */
    public function just_thread_creators_can_mark_best_reply()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        $this->signin(create(User::class));

        $this->post("/replies/{$reply->id}/best-reply")
            ->assertStatus(403);

        $this->assertNull($thread->best_reply);
    }
}
