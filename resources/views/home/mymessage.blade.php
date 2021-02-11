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
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>
<body>
@include('home._header')
<div class="col-md-2 hidden-xs">
@include('home.usermenu')
</div>

<div class="col-md-10 hidden-xs">
    <div class="furniture-right">
        <h3>Mesajlarım</h3>
        <div class="right-list-f">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Kullanıcı id</th>
                                    <th class="border-top-0">Kitap idleri</th>
                                    <th class="border-top-0">Ödünç alma Tarihi</th>
                                    <th class="border-top-0">Teslim Tarihi</th>
                                    <th class="border-top-0">Notunuz</th>
                                    <th class="border-top-0">Toplam gün</th>
                                    <th class="border-top-0">Durum</th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach ($data as $rs )
                                    <tr>

                                        <td>{{ $rs->user_id }}</td>
                                        <td>{{ $rs->book_id }}</td>
                                        <td>{{ $rs->book_date }}</td>
                                        <td>{{  $rs->return_date }} </td>
                                        <td>{!!  $rs->note !!} </td>
                                        <td>{{  $rs->days }} </td>
                                        <td>{!!  $rs->status !!} </td>

                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>


                </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>



@include('home._footer')










</body>
</html>

