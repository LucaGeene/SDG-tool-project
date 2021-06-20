<?php

namespace Database\Factories;

use App\Models\Education;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

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
    public function definition(): array
    {
        return [
            'verified' => $this->faker->numberBetween(0,1),
            'goalid' => $this->faker->numberBetween(1,17),
            'title' => $this->faker->name(),
            'education' => $this->faker->word(),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(1000),


        ];
    }
}
