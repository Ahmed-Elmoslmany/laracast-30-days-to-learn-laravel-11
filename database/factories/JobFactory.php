<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
            "title"=> $this->faker->jobTitle(),
            "employer_id"=>Employer::factory(),
            "salary"=> $this->faker->randomNumber(4),
        ];
    }
}
