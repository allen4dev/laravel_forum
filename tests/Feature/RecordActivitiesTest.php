<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;

class RecordActivitiesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_activity_is_recorded_when_an_authenticated_user_creates_a_thread()
    {
        $this->signin();
        
        $thread = raw(Thread::class, [ 'user_id' => auth()->id() ]);
        
        $this->post('/threads', ['thread' => $thread]);

        $this->assertDatabaseHas('activities', [
            'user_id'      => auth()->id(),
            'type'         => 'created_thread',
            'subject_id'   => Thread::first()->id,
            'subject_type' => Thread::class,
        ]);
    }

    /** @test */
    public function an_activity_is_recorded_when_an_authenticated_user_replies_a_thread()
    {
        $this->signin();

        $thread = create(Thread::class);
        $reply = raw(Reply::class, [ 'thread_id' => $thread->id ]);
        
        $this->post("/threads/{$thread->id}/reply", ['reply' => $reply]);

        $this->assertDatabaseHas('activities', [
            'user_id'       => auth()->id(),
            'type'          => 'created_reply',
            'subject_id'    => Reply::first()->id,
            'subject_type'  => Reply::class,
        ]);
    }
}
