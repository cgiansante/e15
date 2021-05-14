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
        <option id="1" value="Large Mouth Bass">
        <option id="2" value="Small Mouth Bass">
        <option id="3" value="Trout">
        <option id="4" value="Salmon">
        <option id="5" value="Perch">
        <option id="6" value="Walleye">
        <option id="7" value="Pickeral">
        <option id="8" value="Pike">
        <option id="9" value="Muskie">
        <option id="10" value="Other">
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

<div>
    @if(!is_null($fishes))
    @foreach($fishes as $slug => $fish)
    <div>{{ $fish['slug']}}</div>
    @endforeach
    @endif

</div>
@endsection
