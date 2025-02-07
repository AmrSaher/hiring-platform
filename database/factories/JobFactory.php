<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => (string)$this->faker->numberBetween($min = 20000, $max = 200000),
            'location' => 'Remote',
            'type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Freelance']),
            'url' => $this->faker->url(),
            'featured' => false,
            'employer_id' => Employer::factory()
        ];
    }
}
