<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' =>  $this->faker->text,
            'place' => $this->faker->sentence(3),
            'image' => $this->faker->imageUrl(900, 600),
            'start_date' => now(),
            'start_time' => now(),
        ];
    }
}
