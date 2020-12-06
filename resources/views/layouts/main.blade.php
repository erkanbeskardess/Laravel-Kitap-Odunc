<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>
<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <a href="/home">Anasayfa</a>
    <a href="/aboutus">About us</a>
    @yield('header')

</div>



<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('content')
    </div>
</div>
<div class="jumbotron text-center">
    <h1>Footer</h1>
    <p>Sayfa altı</p>
    @yield('footer')
   </div>

</body>
</html>
