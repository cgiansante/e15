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

<div>
    @foreach($ponds as $slug => $pond)
    <a href='{{ $pond['map']}}'> {{ $pond['name']}}</a>
    @endforeach
</div>
@endsection
