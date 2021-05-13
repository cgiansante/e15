@extends('layouts/main')
@section('content')
@if(Auth::user())
<h2>
    Hello {{ Auth::user()->name }}!
</h2>
@endif
<h3>Search fish</h3>

<form method='GET' action='/newFish'>
    <label for="fish">Choose your Fish:</label>
    <input list="species-choices" id="species" name="species" value='{{old('species')}}' />

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
            <input type='text' name='searchTerm' placeholder='Enter an Lake or Pond' value='{{ old('searchTerm')}}'>
        </label>
    </fieldset>

    <input type='submit' class='btn' value='Search'>

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
