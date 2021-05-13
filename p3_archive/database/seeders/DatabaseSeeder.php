<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Fish;
use App\Models\Pond;
use App\Models\Specie;
use Illuminate\Support\Facades\Hash;

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
        $this->call(UsersTableSeeder::class);
        $this->call(SpeciesTableSeeder::class);
        $this->call(PondsTableSeeder::class);
        $this->call(FishTableSeeder::class);
    }
}