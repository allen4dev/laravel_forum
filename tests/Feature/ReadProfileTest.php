<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class ReadProfileTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function a_user_can_see_the_information_of_other_users()
    {
        $user = create(User::class);

        $this->get($user->path())
            ->assertSee($user->username)
            ->assertSee($user->email)
            ->assertSee($user->job_title);
    }
}
