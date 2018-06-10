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
        $laravel = create(Skill::class, [ "name" => "Laravel" ]);
        $react = create(Skill::class, [ "name" => "React" ]);

        $this->get('/')
            ->assertSee($laravel->name)
            ->assertSee($react->name);
    }

    /** @test */
    public function a_user_can_see_a_single_skill()
    {
        $skill = create(Skill::class);

        $this->get($skill->path())
            ->assertSee($skill->name)
            ->assertSee($skill->description);
    }
}
