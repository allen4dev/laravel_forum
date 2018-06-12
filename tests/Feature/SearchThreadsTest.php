<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Skill;
use App\Thread;

class SearchThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_search_threads_by_title()
    {
        $laravelThread = create(Thread::class, [
            'title' => 'Testing in laravel'
        ]);

        $reactThread = create(Thread::class, [
            'title' => 'React new context api'
        ]);

        $searchWord = 'laravel';

        $this->get("/search?title={$searchWord}")
            ->assertSee($laravelThread->title);
    }

    /** @test */
    public function a_user_can_search_threads_by_skill()
    {
        $laravelSkill = create(Skill::class);

        $laravelThread = create(Thread::class, [
            'skill_id' => $laravelSkill->id
        ]);

        $reactThread = create(Thread::class);
        
        // ToDo: Search by skill name
        $this->get("/search?skill={$laravelSkill->id}")
            ->assertSee($laravelThread->title)
            ->assertSee($laravelSkill->name);
    }
}
