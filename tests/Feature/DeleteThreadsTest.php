<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\User;

class DeleteThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_thread_creator_can_delete_his_thread()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' =>  auth()->id() ]);

        $this->delete($thread->path())
            ->assertRedirect(auth()->user()->path());

        $this->assertCount(0, auth()->user()->threads);
        $this->assertDatabaseMissing('threads', ['id' => $thread->id]);
    }

    /** @test */
    public function only_thread_creators_can_delete_his_threads()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);

        $this->signin(create(User::class));

        $this->delete($thread->path())->assertStatus(403);
        
        $this->assertDatabaseHas('threads', [
            'id'    => $thread->id,
            'title' => $thread->title,
        ]);
    }

    public function a_deleted_thread_should_also_delete_his_replies()
    {
        // Given we have an authenticated user
        // a thread created by him and a reply for his thread

        // When he  delete his thread
        
        // Then the reply should also be deleted
    }
}
