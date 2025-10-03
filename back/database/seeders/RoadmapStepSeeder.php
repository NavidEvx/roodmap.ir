<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use App\Models\RoadmapStep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roadmap::all()->each(function ($roadmap) {
            RoadmapStep::factory()
                ->count(3)
                ->create([
                    'roadmap_id' => $roadmap->id,
                ]);
        });
    }
}
