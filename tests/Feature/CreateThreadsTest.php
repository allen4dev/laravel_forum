<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\User;

class CreateThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticaded_user_can_create_threads()
    {
        $user = factory(User::class)->create();
        
        $this->be($user);

        $thread = factory(Thread::class)->raw([
            'user_id' => $user->id,
        ]);

        $this->post('/threads', $thread);

        $this->assertDatabaseHas('threads', [
            "title" => $thread['title'],
            "user_id" => $user->id,
        ]);
    }
}
