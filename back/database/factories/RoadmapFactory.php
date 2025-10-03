<?php

namespace Database\Factories;

use App\Models\RoadmapType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Roadmap>
 */
class RoadmapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roadmap_type_id' => RoadmapType::inRandomOrder()->first()->id,
            'slug' => $this->faker->unique()->slug,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
        ];
    }
}
