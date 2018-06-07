<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_thread_knows_his_path()
    {
        $thread = factory(Thread::class)->create();

        $this->assertEquals($thread->path(), "/threads/{$thread->id}");
    }
}
