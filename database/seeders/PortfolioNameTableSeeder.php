<?php

namespace Database\Seeders;

use App\Models\PortfolioName;
use Illuminate\Database\Seeder;

class PortfolioNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioName::create([
            'your_name'=>'mashrafee',
            'your_position'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
    }
}
