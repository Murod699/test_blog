<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(360,360, 'nature', true),
            'created_at' => $this->faker->dateTime()
        ];
    }
}
