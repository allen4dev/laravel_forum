<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;

class ReadRepliesTest extends TestCase
{
    use RefreshDatabase;

    // ToDo: Refactor
    public function setUp()
    {
        parent::setUp();
        $this->signin();
    }

    /** @test */
    public function a_user_can_see_the_replies_of_a_thread()
    {
        $thread = create(Thread::class);
        $replyOne = create(Reply::class, [ "thread_id" => $thread->id ]);
        $replyTwo = create(Reply::class, [ "thread_id" => $thread->id ]);
        
        $this->get($thread->path())
            ->assertSee($replyOne->body)
            ->assertSee($replyTwo->body);
    }
}
