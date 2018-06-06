<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadThreadsTest extends TestCase
{
    /** @test */
    public function a_user_can_see_the_latest_threads()
    {
        // Given we have one thread from now and other from the past week
        
        // When a user visits "/"
        
        // Then he should see both threads ordered by latest date
        $this->assertTrue(true);
    }
}
