<?php

namespace Database\Seeders;

use App\Models\RoadmapCard;
use App\Models\RoadmapStep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoadmapStep::all()->each(function ($step) {
            RoadmapCard::factory()
                ->count(4)
                ->create([
                    'roadmap_step_id' => $step->id,
                ]);
        });
    }
}
