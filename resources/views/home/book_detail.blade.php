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
<div class="terms-conditions product-page">
    <div class="terms-title">
        <div class="container">
            <div class="row">
                <center>@include('home.message')</center>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">AnaSayfa </a></li>
                    <li><a href="{{route('home')}}"><td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title) }} </a></li>
                    <li><a href="{{route('home')}}>{{$data->novelist}} </a></li>
                    <li><a href="{{route('home')}}">{{$data->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="product-page-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="prod-page-title">
                    <h2>{{$data->name}}</h2>
                    <p>By <span>{{$data->novelist}}</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <div class="md-prod-page">
                    <div class="md-prod-page-in">
                        <div class="page-preview">
                            <div class="preview">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1"><img src="{{Storage::url($data->image)}}" alt="#" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                            <div class="left-dit-p">
                                <div class="prod-btn">
                                    {{$data->description}}
                                </div>
                            </div>
                            <div class="right-dit-p">
                                <div class="like-list">
                                    <ul>
                                        @foreach($datalist as $rs)
                                        <li>
                                            <div class="im-b"><img src="{{Storage::url($rs->image)}}" alt=""></div>
                                        </li>
                                        @endforeach
                                            <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description-box">
                        <div class="dex-a">
                            <h4>Detay</h4>
                            <p>{!! $data->detail !!}
                            </p>
                            <br>

                        </div>
                        <div class="spe-a">
                            <h4>Kitabın bilgileri</h4>
                            <ul>
                                <li class="clearfix">
                                    <div class="col-md-4">
                                        <h5>Yayın Evi</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$data->publisher}}</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="col-md-4">
                                        <h5>Ücret</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$data->price}} ₺</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="col-md-4">
                                        <h5>Sayfa Sayısı</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$data->page}}</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                   <form action="{{route('user_basket_add',['id'=>$data->id])}}" method="post">
                                       @csrf
                                    <div class="col-md-12">
                                        <input type="submit" style="width:250px;height: 50px;float: right;background-color: #5cb85c;font-size: 15px; " value="Kitap Sepetime Ekle"/>
                                    </div>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>


@include('home._footer')










</body>
</html>
