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
        <h3>Kitap Sepetim</h3>
        <div class="right-list-f">
            @foreach($datalist as $rs)
                <div class="col-lg-3 col-sm-6 col-md-3">

                        <div class="box-img">
                            <a style="margin-top:10px;background-color: #5cb85c;font-size: 15px; " href="{{route('book',['id'=>$rs->books->id])}}"><input type="submit" style="width:250px;height:50px; margin-top:10px;margin-bottom:10px;background-color: #5cb85c;font-size: 15px; " value="Kitabın Detayı"/></a>
                            <img src="{{Storage::url($rs->books->image)}}" alt="" />
                           <a href="{{route('user_basket_delete', ['id'=>$rs->id])}}"> <input type="submit" style="width:250px;height:50px; margin-top:10px;background-color: #5cb85c;font-size: 15px; " value="Sepetten Çıkar..."/></a>
                              </div>

                </div>
            @endforeach

                <div class="col-lg-3 col-sm-6 col-md-3">

                        <div class="box-img">

                            <div class="main-block">
                                @include('home.message')
                                <form action="{{route('givebook')}}" method="post">
                                    @csrf
                                    <h1>Ödünç Alma Formu</h1>

                                    <div class="info">
                                        <input class="fname" type="text" name="name" value="{{Auth::user()->name}}">
                                        <input class="fname" type="number" name="user_id" value="{{Auth::user()->id}}">

                                        <input type="date" name="book_date" placeholder="Başlangıç Tarihi">
                                        <input type="date" name="return_date" placeholder="Dönüş Tarihi">
                                        <input type="number" name="days" placeholder="Kaç gün??">
                                        <input type="radio" name="status" value="Ödünç alma">
                                    </div>

                                    <input type="submit" style="width:250px;height:50px; margin-top:10px;background-color: #5cb85c;font-size: 15px; " value="Ödünç Almayı gerçekleştir..."/>
                                </form>


                             </div>
                        </div>


                </div>


        </div>
    </div>
    <br>
    <br>
    <br>
</div>



@include('home._footer')










</body>
</html>

