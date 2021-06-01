<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeria;
use Database\Factories\ContactFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Galeria::factory(10)->create();
    }
}
