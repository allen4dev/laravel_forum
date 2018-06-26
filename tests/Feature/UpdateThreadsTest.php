<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Reply;
use App\Thread;

class UpdateThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_thread_creator_can_update_his_thread()
    {
        $this->signin();

        $thread = create(Thread::class, [ 'user_id' => auth()->id() ]);
        $updatedThread = [
            'title' => 'New thread title',
            'body' => 'New thread body',
            'description' => 'New thread description',
        ];
        
        $this->patch($thread->path(), $updatedThread)
            ->assertRedirect($thread->path());

        tap($thread->fresh(), function ($thread) use ($updatedThread) {
            $this->assertEquals($thread->title, $updatedThread['title']);
            $this->assertEquals($thread->description, $updatedThread['description']);
            $this->assertEquals($thread->body, $updatedThread['body']);
        });
    }

    /** @test */
    public function a_thread_just_can_be_updated_by_his_creator()
    {
        $this->signin();
        $thread = create(Thread::class);

        $this->patch($thread->path(), [])->assertStatus(403);
    }
}
