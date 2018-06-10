<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class UserTest extends TestCase
{
    /** @test */
    public function a_user_knows_his_path()
    {
        $user = create(User::class);
    
        $this->assertEquals($user->path(), $user->path());
    }
}
