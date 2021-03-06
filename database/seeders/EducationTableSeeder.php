<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'education_year'=>'2018',
            'education_degree'=>'Honours',
            'education_institution'=>'NUBTK'
        ]);
    }
}
