<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL('css/header.css')}}">
    <title>{{config('app.name','My Website')}}</title>
    @stack('styles')
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
    @stack('scripts')
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const logo = document.getElementById("logoImage");
        logo.addEventListener("click", function () {
            window.location.href = "{{ url('/') }}";
        });
    });
</script>
</html>