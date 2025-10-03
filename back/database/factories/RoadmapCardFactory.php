<?php

namespace Database\Factories;

use App\Models\RoadmapStep;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoadmapCard>
 */
class RoadmapCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roadmap_step_id' => RoadmapStep::inRandomOrder()->first()->id,
            'is_suggested' => $this->faker->boolean(20),
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->optional()->sentence(),
            'icon' => $this->faker->optional()->word,
            'bg_color' => $this->faker->optional()->hexColor,
        ];
    }
}
