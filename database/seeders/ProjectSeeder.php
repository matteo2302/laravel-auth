<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->words(3, true);
            $project->date = $faker->dateTime();
            $project->last_update = $faker->dateTime();
            $project->description = implode(' ', $faker->paragraphs());
            $project->image = $faker->imageUrl(640, 480, 'animals', true);
            $project->save();
        }
    }
}
