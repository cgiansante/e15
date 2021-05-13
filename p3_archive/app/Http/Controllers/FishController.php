<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Fish;
use App\Models\Pond;
use App\Models\Specie;

// use App\Actions\Book\StoreNewBook;

class FishController extends Controller
{
    public function index()
    {
        // $fish = Fish::orderBy('species_id', 'ASC')->get();
    
        # Query the database for new books
        //$newBooks = Book::orderBy('id', 'DESC')->limit(3)->get();
            
        # vs. Query the collection for new books
        //$newBooks = $books->sortByDesc('id')->take(3);
    
        //return view('books/index', ['books' => $books, 'newBooks' => $newBooks]);
        // foreach ($fish as $fish) {
        //     dump($fish->name);
        // }
    }


    public function new()
    {
        $fish = new Fish();
        $songs = json_decode($songData, true);
        $songs = Arr::sort($songs, function ($value) {
            return $value['ArtistName'];
        });
        return view('songs/index', ['songs' => $songs]);
    }
    
    public function search(Request $request)
    {
        #form validation
        $request->validate([
                'species' => 'required',
                'searchType' => 'required_with:searchTerm'
            ]);
            
        $songData = file_get_contents(database_path('songs.json'));
        $songs = json_decode($songData, true);
        $searchType = $request->input('searchType', '');
        $searchMood = $request->input('mood', '');
        $searchRating = $request->input('rating', '');
        $searchTerm = $request->input('searchTerm', '');
        $searchResults = [];
        $moodResults = [];
    
        foreach ($songs as $slug => $song) {
            if (($song['Mood'] == $searchMood) && ($song['Popularity'] >= $searchRating)) {
                $moodResults[$slug] = $song;
            }
        }
        if ($searchTerm !== null) {
            foreach ($moodResults as $slug => $song) {
                if (strtolower($song[$searchType]) == strtolower($searchTerm)) {
                    $searchResults[$slug] = $song;
                }
            }
        } else {
            $searchResults = $moodResults;
        }
            
        session(['searchResults' => $searchResults]);
        return redirect('/')->with([
                'searchResults' => $searchResults
                ])->withInput();
    }
}