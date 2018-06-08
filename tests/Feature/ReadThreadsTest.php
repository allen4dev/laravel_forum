<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;

class ReadThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_the_latest_threads()
    {
        $todayThread = factory(Thread::class)->create();
        $lastWeekThread = factory(Thread::class)->create();
        
        $lastWeekThread->created_at->subWeek();
        
        $this->get('/')
            ->assertSee($todayThread->title)
            ->assertSee($lastWeekThread->title);
        
        $latest = Thread::latest()->first();
        
        $this->assertEquals($latest->title, $todayThread->title);
    }

    /** @test */
    public function a_user_can_see_a_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->description)
            ->assertSee($thread->body);
    }
}
