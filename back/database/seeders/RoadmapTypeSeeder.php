<?php

namespace Database\Seeders;

use App\Models\RoadmapType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoadmapType::insertOrIgnore([
            ['name' => 'language'],
            ['name' => 'domain'],
        ]);
    }
}
