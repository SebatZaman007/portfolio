<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;

class SocialNetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialNetwork::create([
            'icon'=>'fa fa-facebook',
            'link'=>'https://facebook.com/',
            'name'=>'facebook',
        ]);
    }
}
