<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;

class RecordActivitiesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_activity_is_recorded_when_an_authenticated_user_creates_a_thread()
    {
        $this->withoutExceptionHandling();
        
        // Given whe have an authenticated user
        $this->signin();
        
        $thread = raw(Thread::class, [ 'user_id' => auth()->id() ]);
        
        // When he creates a new thread
        $this->post('/threads', ['thread' => $thread]);

        // Then a new activity should appear in his profile
        // with details of the action.
        $this->assertDatabaseHas('activities', [
            'user_id'      => auth()->id(),
            'type'         => 'create_thread',
            'subject_id'   => $thread['id'],
            'subject_type' => Thread::class,
        ]);
    }
}
