<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MarkBestReplyTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function a_thread_creator_can_mark_a_best_reply_by_his_thread()
    {
        // Given we have an authenticated user
        // a thread created by himself, and a reply from his thread

        // When he tries to mark the reply as the best reply of his thread
        
        // Then we should update the best__reply (id) field of the thread.
    }
}
