<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Big Boss Bass ')</title>
    <meta charset='utf-8'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link href='/css/fish.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

    <header>
        <h1><a href='/'>Big Boss Bass</a></h1>
        <nav>
            <ul>
                <li><a href='/home'>Fish Feed</a></li>
                <li><a href='/search'>Find Fish</a></li>
                @if(Auth::user())
                <li><a href='/myfish'>My Fish</a></li>
                <li><a href='/fish/create'>Add a Fish</a></li>
                @endif
                <li>
                    @if(!Auth::user())
                    <a href='/login'>Login</a>
                    @else
                    <form method='POST' id='logout' action='/logout'>
                        {{ csrf_field() }}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form>
                    @endif
                </li>
            </ul>
        </nav>

    </header>
    <section id='main'>
        @yield('content')
    </section>

    <footer>
        &copy; Giansante, Inc.
    </footer>

</body>
</html>
