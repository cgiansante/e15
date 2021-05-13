@extends('layouts/header')
@section('content')


@if(Auth::user())
<h2>
    Hello {{ Auth::user()->name }}! Find that Big Boss Bass with the help of your friends.
</h2>
@else
<h3>We Work for You</h3>
<h3>Fish with your Friends in MA</h3>
@endif
<form method='GET' action='/search'>
    <input list="species-choices" id="species" name="species" placeholder='Select a species' value='{{old('species')}}' />

    <datalist id="species-choices">
        <option value="Large Mouth Bass">
        <option value="Small Mouth Bass">
        <option value="Trout">
        <option value="Salmon">
        <option value="Perch">
        <option value="Walleye">
        <option value="Pickeral">
        <option value="Pike">
        <option value="Muskie">
        <option value="Other">
    </datalist>

    <fieldset>
        <label for='searchTerm'>
            <input type='text' name='searchTerm' placeholder='Select a Pond' value='{{ old('searchTerm')}}'>
        </label>
    </fieldset>

    <input type='submit' class='btn' value='View'>

</form>
@if(count($errors) > 0)
<ul class='alert alert-danger'>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@if(!is_null($searchResults))
@if(count($searchResults) == 0)
<div class='results alert alert-warning'>
    No results found.
</div>
@else
<div class='results alert alert-primary'>

    {{ count($searchResults) }}
    {{ Str::plural('Result', count($searchResults)) }}:

    @foreach($searchResults as $slug => $song)
    <div><a href='{{ $song['Track URI']}}'> <img class='images' title='{{ $song['TrackName']}} by {{ $song['ArtistName']}}' src='{{ $song['Album Image URL'] }}'></a></div>
    @endforeach
    @endif
    @endif
    @endsection
</div>
