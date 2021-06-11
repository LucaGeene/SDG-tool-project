<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;


class Projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->count(200)
            ->create();
    }
}
