<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = factory(App\Skill::class, 5)->create();

        $skills->each(function ($skill) {
            factory(App\Thread::class, 5)->create([
                "skill_id" => $skill->id,
            ]);
        });
    }
}
