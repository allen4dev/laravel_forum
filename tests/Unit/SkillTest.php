<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Skill;

class SkillTest extends TestCase
{
    /** @test */
    public function a_skill_knows_his_path()
    {
        $skill = factory(Skill::class)->create();

        $this->assertEquals("/skills/{$skill->id}", $skill->path());
    }
}
