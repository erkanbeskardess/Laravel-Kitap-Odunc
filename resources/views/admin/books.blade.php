@extends('layouts.admin')
@section('title','KtpOdunc Admin Panel')
@section('content')

    <div class="page-wrapper" style="min-height: 250px;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Ürünler</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ml-auto">
                            <li><a href="#"></a></li>
                        </ol>
                        @auth
                            <li><a href="{{route('admin_category_add')}}"
                                   class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Kategori ekle</a></li>
                            <li><a href="{{route('admin_books_add')}}"
                                   class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Ürün ekle</a></li>
                            <a href="{{route('admin_logout')}}"
                               class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Logout</a>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Ürünler</h3>
                    </div>
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Kategori</th>
                                    <th class="border-top-0">Başlık</th>
                                    <th class="border-top-0">Kitap Adı</th>
                                    <th class="border-top-0">Yazar</th>
                                    <th class="border-top-0">Yayın evi</th>
                                    <th class="border-top-0">Fotoğraflar</th>
                                    <th class="border-top-0">Galeri</th>
                                    <th class="border-top-0">Fiyat</th>
                                    <th class="border-top-0">Sayfa Sayısı</th>
                                    <th class="border-top-0">Statü</th>
                                    <th class="border-top-0">Düzenle</th>
                                    <th class="border-top-0">Sil</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach ($datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                         <td>Yapılıyor</td>
                                    <td>{{ $rs->title }}</td>

                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->novelist }}</td>
                                    <td>{{ $rs->publisher }}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="50" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_add',['books_id'=>$rs->id])}}" target="_blank" ><img src="{{asset('assets/admin/plugins/images')}}/gallery.png" height="50"></a> </td>
                                    <td>{{ $rs->price }}</td>

                                    <td>{{ $rs->page }}</td>

                                    <td class="txt-oflo">{{ $rs->status }}</td>


                                    <td class="txt-oflo" ><a href="{{route('admin_books_edit',['id'=>$rs->id])}}" >Edit</a></td>
                                    <td class="txt-oflo"><a href="{{route('admin_books_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İstediğinize emin misiniz?')">Delete</a></td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>




                    </div>
                </div>
            </div>

        </div>

@endsection
