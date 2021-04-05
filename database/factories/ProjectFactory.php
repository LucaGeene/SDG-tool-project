<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'goalId' => $this->faker->numberBetween(1,17),

            'title' => $this->faker->name(),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(1000)
        ];
    }
}
