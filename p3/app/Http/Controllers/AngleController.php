<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Angle;

class AngleController extends Controller
{
    public function search(Request $request)
    {
        $fishes = Angle::all()->toArray();
        
        $searchPond = $request->input('searchTerm', '');
        $searchSpecies = $request->input('species', '');
        $searchResults = [];
        
        foreach ($fishes as $slug => $fish) {
            if (($fish['speciesId'] = $searchSpecies)) {
                $searchResults [$slug] = $fish;
            }
        }

        session(['fishes' => $fishes]);
        return redirect('/')->with([
             'fishes' => $fishes
             ])->withInput();
    }
}