@extends('layouts.main')
@section('title','sa')



@section('content')

    <div class="products">
        <div class="main-products">
            <h2>Çok okunan Kitaplar</h2>
            <div class="product-slidr">
                <div class="slider">
                    @foreach($trend as $rs)
                    <div>

                        <div class="prod-box">

                            <div class="prod-i">

                                <a href="{{route('book',['id'=>$rs->id])}}"> <img src="{{Storage::url($rs->image)}}" /></a>
                            </div>

                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>{{$rs->name}}</h4>
                                        <p>By <span>{{$rs->novelist}}</span></p>
                                    </div>
                                    <a href="#">{{$rs->price}}TL</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="{{route('book',['id'=>$rs->id])}}"><i class="fa fa-star" aria-hidden="true"></i> Detay </a>
                                </div>
                            </div>
                        </div>



                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection
