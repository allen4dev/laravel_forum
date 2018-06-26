<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;

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
    }
}
