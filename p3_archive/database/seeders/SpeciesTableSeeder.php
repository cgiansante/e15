<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specie;

class SpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addSpecies();
    }

    /**
     *
     */
    private function addSpecies()
    {
        $specie = new Specie();
        $specie->slug = 'large-mouth-bass';
        $specie->name = 'Large Mouth Bass';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'small-mouth-bass';
        $specie->name = 'Small Mouth Bass';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'trout';
        $specie->name = 'Trout';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'salmon';
        $specie->name = 'Salmon';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'perch';
        $specie->name = 'Perch';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'walleye';
        $specie->name = 'Walleye';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'pike';
        $specie->name = 'Pike';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'muskie';
        $specie->name = 'Muskie';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'pickeral';
        $specie->name = 'Pickeral';
        $specie->save();

        $specie = new Specie();
        $specie->slug = 'other';
        $specie->name = 'Other';
        $specie->save();
    }
}