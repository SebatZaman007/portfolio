<?php

namespace Database\Seeders;

use App\Models\UpComingProjects;
use Illuminate\Database\Seeder;

class UcProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UpComingProjects::create([
            'image'=>'owl-g20b1bf164_1920.jpg',
            'name'=>'web',
            'year'=>'2023'
        ]);
    }
}
