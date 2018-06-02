<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="App">
        <header class="Header">
            <p class="Logo">Forum</p>

            <form class="Searchbar">
                <input type="text" class="Searchbar-input" />

                <button class="Searchbar-button" type="submit">
                    Search
                </button>
            </form>

            <nav class="Navigation">
                <ul class="Navigation-list">
                    <li class="Navigation-item">
                        <a href="#" class="Navigation-link">Sign in</a>
                    </li>
                    <li class="Navigation-item">
                        <a href="#" class="Navigation-link">Sign up</a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')
    </div>
</body>
</html>
