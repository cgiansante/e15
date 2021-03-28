<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $searchResults = session('searchResults', null);
        return view('pages/home', ['searchResults' => $searchResults]);
    }
}