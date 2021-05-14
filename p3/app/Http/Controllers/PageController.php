<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pond;

class PageController extends Controller
{
    public function index()
    {
        $fishes = session('fishes', null);
        return view('pages/home', ['fishes' => $fishes]);
    }

    public function map()
    {
        $ponds = Pond::all()->toArray();
        session(['ponds' => $ponds]);
        return view('pages/maps', [
             'ponds' => $ponds
             ]);
    }
}