<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;

class MarkBestReplyTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function a_thread_creator_can_mark_a_best_reply_by_his_thread()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        $this->post("/threads/{$thread->id}/best-reply", [
            'reply_id' => $reply->id,
        ])->assertRedirect("/threads/{$thread->id}");
        
        $this->assertEquals($thread->fresh()->best_reply, $reply->id);
    }
}
