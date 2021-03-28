@extends('layouts/main')
@section('content')
<h3>Search for a song to match your mood</h3>

<form method='GET' action='/search'>
    <label for="mood">Choose your Mood:</label>
    <input list="mood-choices" id="mood" name="mood" value='{{old('mood')}}' />

    <datalist id="mood-choices">
        <option value="Energetic">
        <option value="Lonely">
        <option value="Reflective">
    </datalist>

    <div>
        <label for="rating">Rating</label>
        <input type="range" id="rating" name="rating" min="0" max="100" value='{{old('rating')}}'>
    </div>

    <fieldset>
        <label for='searchTerm'>
            <input type='text' name='searchTerm' placeholder='Enter an Artist or Track' value='{{ old('searchTerm')}}'>
        </label>
    </fieldset>

    <fieldset>
        <input type='radio' name='searchType' id='ArtistName' value='ArtistName' {{(old('searchType') == 'ArtistName' ) ? 'checked' : ''}}>
        <label for='ArtistName'>Artist</label>
        <input type='radio' name='searchType' id='TrackName' value='TrackName' {{ (old('searchType') == 'TrackName') ? 'checked' : ''}}>
        <label for='TrackName'>Track Name</label>
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
