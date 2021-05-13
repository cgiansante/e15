<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specie;
use Str;

class ModelController extends Controller
{
    public function practice()
    {
        dump(Specie::all()->toArray());
    }

    public function fish()
    {
        dump(Str::plural('catch'));
    }
}