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
        // Given we have an authenticated user
        $this->signin();

        // a thread and a reply by that thread
        $thread = create(Thread::class);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        // When the user post a request to "/reply/{$reply->id}/favorite"
        $this->post("/replies/{$reply->id}/favorite");

        // Then the favorites table should contains a record with the information
        $this->assertDatabaseHas('favorites', [
            'user_id'  => auth()->id(),
            'reply_id' => $reply->id,
        ]);
    }
}
