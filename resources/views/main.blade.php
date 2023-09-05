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
        <div class="title"><h1>Bengkel TEFA Kanesa</h1></div>
        <div class="link">
            <ul>
                <li><a href="" class="nav-link">Beranda</a></li>
            </ul>
        </div>
    </div>
    <div class="container"></div>
    @yield('body')
</body>
</html>
