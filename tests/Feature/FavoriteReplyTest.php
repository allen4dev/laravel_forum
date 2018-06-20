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

    /** @test */
    public function an_authenticated_user_can_favorite_a_reply_just_one_time()
    {
        $this->signin();
        
        $reply = create(Reply::class);

        try {
            $this->post("/replies/{$reply->id}/favorite");
            $this->post("/replies/{$reply->id}/favorite");
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
}
