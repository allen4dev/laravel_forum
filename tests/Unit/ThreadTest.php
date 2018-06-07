<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\User;
use App\Skill;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_thread_knows_his_path()
    {
        $thread = factory(Thread::class)->create();

        $this->assertEquals($thread->path(), "/threads/{$thread->id}");
    }

    /** @test */
    public function a_thread_belongs_to_a_user()
    {
        $thread = factory(Thread::class)->create();
        
        $this->assertInstanceOf(User::class, $thread->user);
    }

    /** @test */
    public function a_thread_belongs_to_a_skill()
    {
        $thread = factory(Thread::class)->create();

        $this->assertInstanceOf(Skill::class, $thread->skill);
    }
}
