<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\Reply;

class FavoriteReplyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_favorite_a_reply()
    {
        $this->signin();

        $thread = create(Thread::class);
        $reply = create(Reply::class, [ 'thread_id' => $thread->id ]);

        $this->favoriteReply($reply);

        $this->assertDatabaseHas('favorites', [
            'user_id'  => auth()->id(),
            'reply_id' => $reply->id,
        ]);
    }

    /** @test */
    public function an_authenticated_user_can_favorite_a_reply_just_one_time()
    {
        $this->signin();
        
        $reply = create(Reply::class);

        try {
            $this->favoriteReply($reply);
            $this->favoriteReply($reply);
        } catch (\Exception $e) {
            $this->fail('You cannot favorite the same reply more than once.');
        }
        
        $this->assertCount(1, $reply->favorites);
    }

    /** @test */
    public function guests_cannot_favorite_a_reply()
    {
        $this->post('/replies/1/favorite')
            ->assertRedirect('login');
    }

    /** @test */
    public function an_authenticated_user_can_unfavorite_a_reply_previously_favorited_by_himself()
    {
        $this->signin();

        $reply = create(Reply::class);
        $this->favoriteReply($reply);
        
        $this->post("/replies/{$reply->id}/unfavorite");
        
        $this->assertCount(0, $reply->favorites);
    }

    /**
     * * Helper methods
     */

    public function favoriteReply($reply)
    {
        $reply = $reply ?? create(Reply::class);

        $this->post("/replies/{$reply->id}/favorite");

        return $reply;
    }
}
