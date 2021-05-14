<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angle;
use Carbon\Carbon;

class AnglesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addAllAngle();
    }

    private function addAllAngle()
    {
        $angleData = file_get_contents(database_path('fish.json'));
        $angles = json_decode($angleData, true);
    
        $count = count($angles);
        foreach ($angles as $slug => $angleData) {
            $angle = new Angle();
            $angle->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $angle->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
            $angle->slug = $angleData['slug'];
            $angle->speciesId = $angleData['specie_id'];
            $angle->pond_id = $angleData['pond_id'];
            $angle->length_feet = $angleData['length_feet'];
            $angle->length_inches = $angleData['length_inches'];
            $angle->weight = $angleData['weight'];
            $angle->user_id = $angleData['user_id'];
            $angle->save();
        }
    }
}