<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = factory(App\Skill::class, 2)->create();

        $skills->each(function ($skill) {
            factory(App\Serie::class, 5)->create([
                "skill_id" => $skill->id,
            ]);
        });
    }
}
