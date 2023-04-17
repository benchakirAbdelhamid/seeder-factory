<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Developer;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $factory->define(Developer::class, function (Faker $faker) {
            return [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'programming_language' => $faker->randomElement(['PHP', 'JavaScript', 'Python', 'Java']),
                'years_of_experience' => $faker->numberBetween(1, 10),
                'github_profile' => $faker->url,
            ];
        });
    }
}
