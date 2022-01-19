<?php

namespace Database\Seeders;

use App\Models\Contacts;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Contacts::create([
           'email'=>'admin@email.com',
           'subject'=>'good',
           'message'=>'very good job'
       ]);
    }
}
