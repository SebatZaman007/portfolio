<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PortfolioNameTableSeeder::class);
        $this->call(PortfolioSocialMediaTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(WorkTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(UcProjectTableSeeder::class);
    }
}
