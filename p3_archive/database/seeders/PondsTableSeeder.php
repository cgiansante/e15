<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pond;
use Carbon\Carbon;

class PondsTableSeeder extends Seeder
{
    /**
     * This run method is the first method you should have in all your Seeder class files
     * This method will be invoked when we invoke this seeder
     * In this method you should put code that will cause data to be entered into your tables
     * (in this case, that's the `fishes` table)
     */
    public function run()
    {
        $this->addAllPonds();
    }

    private function addAllPonds()
    {
        $pondData = file_get_contents(database_path('ponds.json'));
        $ponds = json_decode($pondData, true);
    
        $count = count($ponds);
        foreach ($ponds as $slug => $pondData) {
            $pond = new pond();

            # For the timestamps, we're using a class called Carbon that comes with Laravel
            # and provides many date/time methods.
            # Learn more: https://github.com/briannesbitt/Carbon
            $pond->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $pond->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
            $pond->slug = $pondData['Slug'];
            $pond->name = $pondData['Name'];
            $pond->town = $pondData['Town'];
            $pond->map = $pondData['Map'];
            $pond->save();
            $count--;
        }
    }
}