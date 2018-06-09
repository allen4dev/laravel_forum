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

    /** @test */
    public function a_thread_requires_a_title()
    {
        $this->be(factory(User::class)->create());

        $invalidThread = factory(Thread::class)->raw([
            'title' => null,
        ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.title'); 
    }

    /** @test */
    public function a_thread_requires_a_description()
    {
        $this->be(factory(User::class)->create());

        $invalidThread = factory(Thread::class)->raw([
            'description' => null,
        ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.description'); 
    }

    /** @test */
    public function a_thread_requires_a_body()
    {
        $this->be(factory(User::class)->create());

        $invalidThread = factory(Thread::class)->raw([
            'body' => null,
        ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.body'); 
    }

    /** @test */
    public function a_thread_is_related_to_a_skill()
    {
        $this->be(factory(User::class)->create());

        $invalidThread = factory(Thread::class)->raw([
            'skill_id' => null,
        ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertSessionHasErrors('thread.skill_id'); 
    }

    /** @test */
    public function a_thread_can_optionally_be_related_to_a_serie()
    {
        $this->be(factory(User::class)->create());

        $invalidThread = factory(Thread::class)->raw([
            'serie_id' => null,
        ]);

        $this->post('/threads', [ 'thread' => $invalidThread ])
            ->assertRedirect(Thread::first()->path()); 
    }
}
