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
        $this->call([
            HistorySeeder::class,
            ResiSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
