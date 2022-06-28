<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = ["brazil", "rio", "paris", "gir", "dog", "mangas", "naruto", "bleach", "onepiece", "web", "tech", "mobile"];
        $url = "https://loremflickr.com/1200/840/" . $categories[rand(0, count($categories) - 1)] . "/all??random=" . $categories[rand(0, count($categories) - 1)];
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->sentences(rand(10, 20), true),
            'image' => $url
        ];
    }
}
