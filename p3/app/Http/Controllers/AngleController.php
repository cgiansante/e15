<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Angle;

class AngleController extends Controller
{
    public function index()
    {
        dump(Angle::all()->toArray());
        //dump('songs');
    }
}