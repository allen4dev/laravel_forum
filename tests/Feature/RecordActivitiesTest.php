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
        
        $this->signin();
        
        $thread = raw(Thread::class, [ 'user_id' => auth()->id() ]);
        
        $this->post('/threads', ['thread' => $thread]);

        $this->assertDatabaseHas('activities', [
            'user_id'      => auth()->id(),
            'type'         => 'created_thread',
            'subject_id'   => Thread::first()->id,
            'subject_type' => Thread::class,
        ]);
    }
}
