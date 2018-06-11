<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;

class SearchThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_search_threads_by_title()
    {
        $this->withoutExceptionHandling();
        // Given whe have two threads
        // one related to laravel and other related to react
        $laravelThread = create(Thread::class, [
            'title' => 'Testing in laravel'
        ]);

        $reactThread = create(Thread::class, [
            'title' => 'React new context api'
        ]);

        $searchWord = 'laravel';

        // When the user search by the laravel title
        $this->get("/search?title={$searchWord}")
        // Then he should see the laravel thread in the results
            ->assertSee($laravelThread->title);
    }
}
