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
        $user = create(User::class);
        
        $thread = raw(Thread::class, [ 'user_id' => $user->id ]);

        $this->post('/threads', $thread)
            ->assertRedirect('login');
    }

    /** @test */
    public function an_authenticaded_user_can_create_threads()
    {
        $this->signin();

        $thread = raw(Thread::class, [ 'user_id' => auth()->id() ]);

        $this->post('/threads', ['thread' => $thread])
            ->assertRedirect(Thread::first()->path());


        $this->assertDatabaseHas('threads', [
            "title" => $thread['title'],
            "user_id" => auth()->id(),
        ]);
    }

    /** @test */
    public function a_thread_requires_a_title()
    {
        $this->signin();

        $invalidThread = raw(Thread::class, [ 'title' => null ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.title'); 
    }

    /** @test */
    public function a_thread_requires_a_description()
    {
        $this->signin();

        $invalidThread = raw(Thread::class, [ 'description' => null ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.description'); 
    }

    /** @test */
    public function a_thread_requires_a_body()
    {
        $this->signin();

        $invalidThread = raw(Thread::class, [ 'body' => null ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.body'); 
    }

    /** @test */
    public function a_thread_is_related_to_a_skill()
    {
        $this->signin();

        $invalidThread = raw(Thread::class, [ 'skill_id' => null ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.skill_id'); 
    }

    /** @test */
    public function a_thread_can_optionally_be_related_to_a_serie()
    {
        $this->signin();

        $invalidThread = raw(Thread::class, [ 'serie_id' => null ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertRedirect(Thread::first()->path()); 
    }
}
