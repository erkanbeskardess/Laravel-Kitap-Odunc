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
                            <a href="{{route('admin_logout')}}" target="_blank"
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
                        <h3 class="box-title">Kategoriler</h3>
                    </div>
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Parent</th>
                                    <th class="border-top-0">Kategori</th>
                                    <th class="border-top-0">Statü</th>
                                    <th class="border-top-0">Açıklama</th>
                                    <th class="border-top-0">Düzenle</th>
                                    <th class="border-top-0">Sil</th>
                                </tr>
                                </thead>
                                @foreach ($datalist as $rs )


                                <tbody>
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td class="txt-oflo">{{ $rs->status }}</td>

                                    <td><span class="text-success">{{ $rs->description }}</span></td>
                                    <td class="txt-oflo" ><a href="{{route('admin_category_edit',['id'=>$rs->id])}}" onclick="return confirm('Silmek İstediğinize emin misiniz?')">Edit</a></td>
                                    <td class="txt-oflo"><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İstediğinize emin misiniz?')">Delete</a></td>
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
