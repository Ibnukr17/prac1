<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $title = $this->faker->sentence;
            $slug = $this($title);
            return [
            'title' => $title,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(640, 480, 'animals',
            true),
            'content' => $this->faker->realText(),
            'draft' => random_int(0, 1),
            ];
    }
}
