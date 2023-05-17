<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <nav>
         <ul>
        @section('sidebar')
        <li>DEFINISI OLAHRAGA BRIDGE</li>
        <h4>Bridge merupakan permainan yang menggunakan kartu remi sebagai media permainannya. Permainan ini dimainkan secara berpasangan.</h4>

        <li>JENIS JENIS KARTU</li>
        <h4>Hati yaitu Heart, Sekop yaitu Spade, Berlian/Wajik yaitu Diamond dan Keriting yaitu Club</h4>

        @show
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <h3>@include('layout.footer')</h3>
    </footer>
</body>
</html>