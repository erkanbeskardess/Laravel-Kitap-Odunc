<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fontawesome css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate-wow.css">
    <script src="{{asset('assets')}}/slider/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>

    <!--main css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.min.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/menus.css">

    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/function.js"></script>
</head>
<body>
@include('home._header')
<div class="col-md-2 hidden-xs">
@include('home.usermenu')
</div>

<div class="col-md-10 hidden-xs">
    <div class="furniture-right">
        <h3>Profil</h3>
        <div class="right-list-f">
        @include('profile.show')
        </div>
    </div>
    <br>
    <br>
    <br>
</div>



@include('home._footer')










</body>
</html>

