<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical</title>
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>
    <!-- Desktop Navbar -->
    <div class="desktopnav">
        <div class="logo">TEchMED Health</div>
        <nav>
            <a class="{{ request()->is('/') ? 'navactive' : '' }}" href="/">Home</a>
            <a class="{{ request()->is('about') ? 'navactive' : '' }}" href="/about">About Us</a>
            <a class="{{ request()->is('contact') ? 'navactive' : '' }}" href="/contact">Contact Us</a>
            <a class="{{ request()->is('dash') ? 'navactive' : '' }}" href="/dash">Dashboard</a>
            <div id="menu" class="menu" style="cursor: pointer;">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobilenav" class="mobilenav">
        <nav>
            <a class="{{ request()->is('/') ? 'navactive' : '' }}" href="/">Home</a>
            <a class="{{ request()->is('about') ? 'navactive' : '' }}" href="#">About Us</a>
            <a class="{{ request()->is('contact') ? 'navactive' : '' }}" href="#">Contact Us</a>
            <a class="{{ request()->is('dash') ? 'navactive' : '' }}" href="/dash">Dashboard</a>
        </nav>
    </div>

    {{ $slot }}

    <script src="{{ asset('./js/index.js') }}"></script>


</body>

</html>
