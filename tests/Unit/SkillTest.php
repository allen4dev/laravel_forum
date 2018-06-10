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
        $skill = create(Skill::class);

        $this->assertEquals("/skills/{$skill->id}", $skill->path());
    }

    /** @test */
    public function a_skill_has_many_series()
    {
        $skill = create(Skill::class);

        $this->assertInstanceOf(
            'Illuminate\Database\Eloquent\Collection',
            $skill->series
        );
    }
}
