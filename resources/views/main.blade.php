<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    @yield('link')
    @yield('style')
    <title>{{ $title }}</title>
</head>
<body>
    <div class="navbar d-flex flex-row space-between">
        <div class="title">
            <img src="img/tefa-logo.jpg" alt="">
            {{-- <h1>Bengkel TEFA Kanesa</h1> --}}
        </div>
        <div class="link d-flex item-center">
            <ul class=" d-flex flex-row item-center justify-content-center space-around w-100">
                <li><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="/toko" class="nav-link">Toko</a></li>
                <li><a href="/login" class="nav-link">Masuk</a></li>
            </ul>
        </div>
    </div>
    @yield('body')
</body>
</html>
