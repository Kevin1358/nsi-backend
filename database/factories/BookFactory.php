<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'isbn'=>fake()->isbn10(),
            'title'=>fake()->name(),
            'subtitle'=>fake()->name(),
            'author'=>fake()->name(),
            'published'=>fake()->dateTime(),
            'publisher'=>fake()->name(),
            'pages'=>fake()->numberBetween(0,999),
            'description'=>fake()->name(),
            'website'=>fake()->name(),
            'created_at'=>fake()->dateTime(),
            'updated_at'=>fake()->dateTime(),
        ];
    }
}
