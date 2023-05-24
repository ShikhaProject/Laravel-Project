<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title');
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <header class="header">
            <h4>Header</h4>
            <li>
                <a href="{{ route('Register') }}">Register</a>
            </li>
        </header>
       
        <div class="content">
            @yield('content')
        </div>
        <footer class="footer"><h4>Footer</h4></footer>
    </body>
</html>
