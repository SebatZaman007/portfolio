<?php

namespace Database\Seeders;

use App\Models\PortfolioSocialMedia;
use Illuminate\Database\Seeder;

class PortfolioSocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PortfolioSocialMedia::create([
            'icon'=>'fa fa-facebook',
            'link'=>'https://facebook.com/',
            'name'=>'facebook',
        ]);
    }
}
