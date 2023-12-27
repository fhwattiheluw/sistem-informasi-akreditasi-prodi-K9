<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      // menjalankan faker class user
        \App\Models\User::factory(10)->create();
        // menjalankan faker class data program studi
        \App\Models\dataProgramStudi::factory(1)->create();


    }
}
