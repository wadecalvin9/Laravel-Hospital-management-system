<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical</title>
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <script src="{{ asset('./js/index.js') }}"></script>
</head>

<body>
    <div class="desktopnav">
        <div class="logo">MyTutorials</div>
        <nav>
            <a class="{{ request()->is('/')?"navactive":"" }}" href="/">Home</a>
            <a  class="{{ request()->is('about')?"navactive":"" }}" href="#">AboutUS</a>
            <a class="{{ request()->is('contact')?"navactive":"" }}" href="#">Contact Us</a>
            <a class="{{ request()->is('dash')?"navactive":"" }}" href="/dash">Dashboard</a>

        </nav>

    </div>

    {{ $slot }}


</body>

</html>
