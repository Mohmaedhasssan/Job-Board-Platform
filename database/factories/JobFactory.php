<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
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
                'employer_id' => Employer::factory(),
                'title' => $this->faker->jobTitle(),
                'salary' => $this->faker->RandomElement(['$50,000 USD', '$60,000 USD', '$70,000 USD', '$80,000 USD']),
                'location' => 'Remote',
                'schedule'=> $this->faker->RandomElement(['Full-time', 'Part-time']),
                'url' => $this->faker->url(),
                'featured' => false ,
        ];
    }
}
