<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'activity_type' => $this->faker->text(10),
            'project_id' => $this->faker->numberBetween(1, 200),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(1000),

        ];
    }
}
