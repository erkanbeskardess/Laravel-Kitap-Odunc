@extends('layouts.main')
@section('title')
    {{$setting->title}}
@endsection
@section('description')

    {{$setting->description}}

@endsection
@section('keywords')

    {{$setting->keywords}}

@endsection


@section('content')

    <div class="products_exciting_box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="exciting_box f_pd">
                        <img src="{{asset('assets')}}/images/exciting_img-01.jpg" class="icon-small" alt="" />
                        <h4><strong>Üyelik Sistemi</strong>
                        </h4>
                        <p>Kitapi çevrimiçi bir servistir. macOS, Linux veya Windows işletim sistemleri üzerindeki herhangi bir modern tarayıcıda çalışır.
                            Kurulum gerekmez. Kayıt olup hemen kullanmaya başlayabilirsin.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                    <div class="exciting_box l_pd">
                        <img src="{{asset('assets')}}/images/exciting_img-02.jpg" class="icon-small" alt="" />
                        <h4><strong>Kitap Ödünç Almak..</strong> </h4>
                        <p>Akademik personel ile doktora öğrencileri 25 kitabı 30 gün; yüksek lisans öğrencileri 20 kitabı 30 gün; lisans öğrencileri 15 kitabı 15 gün;
                            idari personel 15 kitabı 30 gün;
                            emekli akademik personel 15 kitabı 30 gün,
                            emekli idari personel 5 kitabı 30 gün süreyle ödünç alabilir.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="start-free-box">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="main-start-box">
                        <div class="free-box-a clearfix">
                            <div class="col-md-6 col-sm-6">
                                <div class="left-a-f">
                                    <h3>A platform built for scale & expansion. Start for free.</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="right-a-f">
                                    <p>Over the comming years, way thet business through the web
                                        works will change at agreat - and chamb is the
                                        gamebreaker.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main-start-box">
                    <div class="bg_img_left"><img src="{{asset('assets')}}/images/bg_img1.png" alt="#" /></div>
                    <div class="container">
                        <div class="buyer-box clearfix">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="left-buyer">
                                    <img class="img-responsive" src="{{asset('assets')}}/images/creat_pro.png" alt="#" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="right-buyer">
                                    <h4>buyer</h4>
                                    <h2>Empower your factory<br>
                                        <span>With a new lead Channel</span>
                                    </h2>
                                    <p>Never worry about sales or income ftom outbound
                                        channels. with chamb your store is directly
                                        connected to thousands of interested in your
                                        products.
                                    </p>
                                    <a href="#">Create a buyer account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="bg_img_right"><img src="{{asset('assets')}}/images/bg_img1.png" alt="#" /></div>
                <div class="main-start-box">
                    <div class="container">
                        <div class="supplier clearfix">
                            <div class="col-md-5 col-sm-6">
                                <div class="left-supplier">
                                    <h4>supplier</h4>
                                    <h2>Grow your store <br><span>With a new sales channel</span></h2>
                                    <p>Never worry about sales or income ftom outbound
                                        channels. with chamb your store is directly
                                        connected to thousands of interested in your
                                        products.
                                    </p>
                                    .
                                    <a href="#">Create a supplier account</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="right-supplier">
                                    <img class="img-responsive" src="{{asset('assets')}}/images/supplier-pc-img.png" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="main-products">
            <h2>Kitaplar</h2>
            <div class="product-slidr">
                <div class="slider">
                    <div >    <!-- alt slider-->

                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="{{asset('assets')}}/images/tr2.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Treehouse Bed</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- alt slider btiş-->
                    <div>

                            <div class="prod-box">
                                <div class="prod-i">
                                    <img src="{{asset('assets')}}/images/tr2.png" alt="#" />
                                </div>
                                <div class="prod-dit clearfix">
                                    <div class="dit-t clearfix">
                                        <div class="left-ti">
                                            <h4>Treehouse Bed</h4>
                                            <p>By <span>Beko</span> under <span>Lights</span></p>
                                        </div>
                                        <a href="#">$1220</a>
                                    </div>
                                    <div class="dit-btn clearfix">
                                        <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                        <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
