<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Skill;
use App\Serie;

class ReadSeriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_series_related_to_a_skill()
    {
        $laravelSkill = factory(Skill::class)->create();
        
        $laravelSerie = factory(Serie::class)->create([
            "skill_id" => $laravelSkill->id,
        ]);
        
        $reactSerie = factory(Serie::class)->create();
        
        $this->get($laravelSkill->path())
            ->assertSee($laravelSerie->name);
    }
}
