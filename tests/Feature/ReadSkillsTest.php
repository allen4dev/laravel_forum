<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Skill;

class ReadSkillsTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
    */
    public function a_user_can_see_all_the_skills()
    {
        $laravel = factory(Skill::class)->create([ "name" => "Laravel" ]);
        $react = factory(Skill::class)->create([ "name" => "React" ]);

        $this->get('/')
            ->assertSee($laravel->name)
            ->assertSee($react->name);
    }
}