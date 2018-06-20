<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;

class FavoriteReplyTest extends TestCase
{
    /** @test */
    public function an_authenticated_user_can_favorite_a_reply()
    {
        $this->withoutExceptionHandling();
        $this->signin();

        $thread = create(Thread::class);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        $this->post("/replies/{$reply->id}/favorite");

        $this->assertDatabaseHas('favorites', [
            'user_id'  => auth()->id(),
            'reply_id' => $reply->id,
        ]);
    }
}
