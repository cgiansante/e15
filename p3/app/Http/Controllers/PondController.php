<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pond;

class PondController extends Controller
{
    public function map()
    {
        $ponds = Pond::all()->toArray();
        session(['ponds' => $ponds]);
        return view('pages/maps', [
             'ponds' => $ponds
             ]);
    }
}