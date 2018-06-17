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

    // ToDo: Refactor
    public function setUp()
    {
        parent::setUp();
        $this->signin();
    }

    /** @test */
    public function a_thread_knows_his_path()
    {
        $thread = create(Thread::class);

        $this->assertEquals($thread->path(), "/threads/{$thread->id}");
    }

    /** @test */
    public function a_thread_belongs_to_a_user()
    {
        $thread = create(Thread::class);
        
        $this->assertInstanceOf(User::class, $thread->user);
    }

    /** @test */
    public function a_thread_belongs_to_a_skill()
    {
        $thread = create(Thread::class);

        $this->assertInstanceOf(Skill::class, $thread->skill);
    }

    /** @test */
    public function a_thread_has_many_replies()
    {
        $thread = create(Thread::class);

        $this->assertInstanceOf(
            'Illuminate\Database\Eloquent\Collection',
            $thread->replies
        );
    }
}
