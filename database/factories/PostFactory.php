<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{

    public function definition()
    {
        return [
        'title' => fake()->word,
        'body' => fake()->text($maxNbChars = 200),
        'place' =>fake()->text($maxNbChars = 6),
        'recruit_nummbers' => fake()->randomNumber(2),
        'recruit_part' => fake()->text($maxNbChars = 6),
        'genre' => fake()->text($maxNbChars = 6),];
    }
}
