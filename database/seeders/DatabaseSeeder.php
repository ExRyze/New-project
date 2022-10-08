<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\animes;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        animes::factory(5)->create();
    }
}
