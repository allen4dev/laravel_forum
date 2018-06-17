<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Reply;
use App\Thread;
use App\User;

class ReplyTest extends TestCase
{
    // ToDo: Refactor
    public function setUp()
    {
        parent::setUp();
        $this->signin();
    }

    /** @test  */
    public function a_reply_belongs_to_a_user()
    {
        $reply = create(Reply::class);

        $this->assertInstanceOf(User::class, $reply->user);
    }

    /** @test  */
    public function a_reply_belongs_to_a_thread()
    {
        $reply = create(Reply::class);

        $this->assertInstanceOf(Thread::class, $reply->thread);
    }
}
