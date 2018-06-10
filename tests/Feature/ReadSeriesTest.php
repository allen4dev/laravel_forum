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
        $laravelSkill = create(Skill::class);
        
        $laravelSerie = create(Serie::class, [
            "skill_id" => $laravelSkill->id
        ]);
        
        $reactSerie = create(Serie::class);
        
        $this->get($laravelSkill->path())
            ->assertSee($laravelSerie->name);
    }

    /** @test */
    public function a_user_can_see_a_single_serie()
    {
        $serie = create(Serie::class);

        $this->get($serie->path())
            ->assertSee($serie->name);
    }
}
