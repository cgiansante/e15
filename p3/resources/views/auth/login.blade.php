@extends('layouts/header')

@section('content')
<h3>Don’t have an account? <a href='/register'>Register here</a></h3>

<form method='POST' action='/login'>

    {{ csrf_field() }}

    <label for='email'>E-Mail Address</label>
    <input id='email' type='email' name='email' value='{{ old('email') }}' autofocus>
    {{-- @include('includes.error-field', ['fieldName' => 'email']) --}}

    <label for='password'>Password</label>
    <input id='password' type='password' name='password'>
    {{-- @include('includes.error-field', ['fieldName' => 'password']) --}}

    <label>
        <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
    </label>

    <button type='submit' class='btn btn-primary'>Login</button>

    </a>

</form>

@endsection
