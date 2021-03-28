@extends('layouts/main')

@section('title')
All Songs
@endsection

@section('head')
<link href='/css/songs.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Songs</h1>

@if(count($songs) == 0)
There are no songs
@else
<div id='songs'>
    <ul>
        @foreach($songs as $slug => $song)
        <li><a href='{{ $song['Track URI']}}'> <img class='img-fluid img-thumbnail rounded float-left' title='{{ $song['TrackName']}} by {{ $song['ArtistName']}}' src='{{ $song['Album Image URL'] }}'></a></li>
        @endforeach
    </ul>
</div>
@endif

@endsection
