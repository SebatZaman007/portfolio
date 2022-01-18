<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'project_image'=>'owl-g20b1bf164_1920.jpg',
            'project_name'=>'portfolio',
            'project_year'=>'march 2018',
        ]);
    }
}
