<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::create([
            'work_year'=>'2019-2020',
            'work_post'=>'Web-Devoloper',
            'work_company_link'=>'https://zainiklab.com/',
            'work_company_name'=>'Zainik Lab',
            'work_description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'

        ]);
    }
}
