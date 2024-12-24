<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name','My Website')}}</title>
    <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="{{URL('css/layout.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
    <body>
        <header class="header">
            <div id="logoWrapper" class="logo-wrapper">
                <img src="{{ asset('images/icons8-shopee-48.png') }}" alt="Logo" id="logoImage" class="logo-img">
            </div>              
            <nav class="nav">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>
        </header>
            <main>
                @yield('content')
            </main>
        <footer>
            <div class="copy-right">
                @ WEBG301 - 2024 - Nguyen Phu Tien - Nguyen Tuan Duong
            </div>  
        </footer>
        @stack('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const logo = document.getElementById("logoImage");
                logo.addEventListener("click", function () {
                    window.location.href = "{{ url('/') }}";
                });
            });
        </script>
    </body>>
</html>