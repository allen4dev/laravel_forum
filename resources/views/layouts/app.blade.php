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
        <!-- Header -->
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
        <!-- /Header -->

        @yield('content')

        <!-- Footer -->
        <footer class="Footer">
            <section class="Footer-about">
                <p class="Logo">Forum</p>

                <p class="Footer-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed non aspernatur recusandae inventore, nisi dicta
                    fugit nam odit, itaque, amet suscipit quibusdam voluptates exercitationem iste ut nostrum id saepe vitae.</p>

                <div class="Social">Put social icons here</div>

                <p class="Footer-copyright">© Laracasts 2018. All right reserved.</p>
            </section>

            <section class="Footer-actions">
                <ul class="Footer-list">
                    <h3 class="Footer-listTitle">Learn</h3>
                    <li class="Footer-listItem">
                        <a href="#" class="Footer-listLink">Library</a>
                        <a href="#" class="Footer-listLink">Lesson index</a>
                        <a href="#" class="Footer-listLink">Books</a>
                        <a href="#" class="Footer-listLink">Sign Up</a>
                        <a href="#" class="Footer-listLink">Sign in</a>
                    </li>
                </ul>

                <ul class="Footer-list">
                    <h3 class="Footer-listTitle">Discuss</h3>
                    <li class="Footer-listItem">
                        <a href="#" class="Footer-listLink">Forum</a>
                        <a href="#" class="Footer-listLink">Laracasts Snippet</a>
                        <a href="#" class="Footer-listLink">Laravel Podcast</a>
                        <a href="#" class="Footer-listLink">Support</a>
                    </li>
                </ul>

                <ul class="Footer-list">
                    <h3 class="Footer-listTitle">Extras</h3>
                    <li class="Footer-listItem">
                        <a href="#" class="Footer-listLink">Statistics</a>
                        <a href="#" class="Footer-listLink">Testimonials</a>
                        <a href="#" class="Footer-listLink">FAQ</a>
                        <a href="#" class="Footer-listLink">Youtube</a>
                        <a href="#" class="Footer-listLink">Get a Job</a>
                        <a href="#" class="Footer-listLink">RSS</a>
                        <a href="#" class="Footer-listLink">Privacy</a>
                        <a href="#" class="Footer-listLink">Terms</a>
                    </li>
                </ul>
            </section>
        </footer>
        <!-- /Footer -->
    </div>
</body>

</html>