<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fish;
use Carbon\Carbon;
use Faker\Factory;

class FishTableSeeder extends Seeder
{
    public function run()
    {
        $this->addAllfish();
    }

    private function addAllFish()
    {
        $fishData = file_get_contents(database_path('fish.json'));
        $fishes = json_decode($fishData, true);
    
        $count = count($fishes);
        foreach ($fishes as $slug => $fishData) {
            $fish = new Fish();
            $fish->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $fish->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
            $fish->slug = $fishData['slug'];
            $fish->species_id = $fishData['specie_id'];
            $fish->pond_id = $fishData['pond_slug'];
            $fish->length_feet = $fishData['length_feet'];
            $fish->length_inches = $fishData['length_inches'];
            $fish->weight = $fishData['weight'];
            $fish->user_id = $fishData['user_id'];
            $fish->save();
        }
    }
}