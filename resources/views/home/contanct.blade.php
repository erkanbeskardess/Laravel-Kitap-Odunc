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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/form.css">

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

                <div class="main-block">
                    @include('home.message')
                    <div class="left-part">
                        <i class="fas fa-envelope"></i>
                        <i class="fas fa-at"></i>
                        <i class="fas fa-mail-bulk"></i>
                    </div>

                    <form action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <h1>Bize ulaşın...</h1>

                        <div class="info">
                            <input class="fname" type="text" name="name" placeholder="Adınız">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="phone" placeholder="Telefon Numarası">
                            <input type="text" name="subject" placeholder="Konu">

                        </div>
                        <p>Mesajınız</p>
                        <div>
                            <textarea name="message" rows="4"></textarea>
                        </div>
                        <button type="submit" href="/">Gönder</button>
                    </form>

                </div>
            </div>
        </div>


    <br>
    <br>
    <br>
@include('home._footer')










</body>
</html>
