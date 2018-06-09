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
    public function a_guest_can_not_create_threads()
    {
        $user = factory(User::class)->create();
        
        $thread = factory(Thread::class)->raw([
            'user_id' => $user->id,
        ]);

        $this->post('/threads', $thread)
            ->assertRedirect('login');
    }

    /** @test */
    public function an_authenticaded_user_can_create_threads()
    {
        $this->be(factory(User::class)->create());
        
        $thread = factory(Thread::class)->raw([ 'user_id' => auth()->id() ]);

        $this->post('/threads', ['thread' => $thread])
            ->assertRedirect(Thread::first()->path());

        $this->assertDatabaseHas('threads', [
            "title" => $thread['title'],
            "user_id" => auth()->id(),
        ]);
    }
}
