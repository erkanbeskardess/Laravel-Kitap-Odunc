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
    <div class="furniture-right">

        <div class="right-list-f">
            <ul>
                <li><a href="{{route('aboutus')}}"><img width="32"  alt="" /> Hakkımızda</a></li>
                <li><a href="{{route('references')}}"><img width="32"  alt="" /> Referanslar</a></li>
                <li><a href="{{route('contanct')}}"><img width="32"  alt="" /> İletişim</a></li>
                <li><a href="{{route('admin_logout')}}"><img width="32"  alt="" /> Çıkış</a></li>


            </ul>
        </div>
    </div>
</div>

<div class="col-md-6 hidden-xs">
    <div class="furniture-right">
        <h3>Bize Dair</h3>
        <div class="right-list-f">
            {!!$setting->contanct!!}
        </div>
    </div>
    <div class="col-md-12 hidden-xs">
        <div class="furniture-right">
            <h3>Bize Ulaşın</h3>
            <div class="right-list-f">
               Yakında hizmetinizde...
            </div>
        </div>


    <br>
    <br>
    <br>
@include('home._footer')










</body>
</html>
