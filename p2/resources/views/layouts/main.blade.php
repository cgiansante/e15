<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'SongBird')</title>
    <meta charset='utf-8'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link href='/css/songs.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

    <header>
        <h1>Welcome to Song Bird</h1>
        <h3>conk-la-ree!!</h3>
        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/songs'>All Songs</a></li>
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
