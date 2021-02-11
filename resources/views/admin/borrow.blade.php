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
                    <h4 class="page-title text-uppercase font-medium font-14"></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ml-auto">
                            <li><a href="#"></a></li>
                        </ol>
                        @auth
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
                        <h3 class="box-title">Ödünç Alma Talepleri</h3>
                        <h3 class="box-title"> @include('home.message')</h3>

                    </div>
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
                                @foreach ($datalist as $rs )
                                <tr>

                                    <td>{{ $rs->user_id }}</td>
                                    <td>{{ $rs->books_id }}</td>
                                    <td>{{ $rs->book_date }}</td>
                                    <td>{{  $rs->return_date }} </td>
                                    <td>{!!  $rs->note !!} </td>
                                    <td>{{  $rs->days }} </td>
                                    <td>{!!  $rs->status !!} </td>




,
                                    <td class="txt-oflo" ><a  href= "{{route('admin_borrow_edit',['id'=>$rs->id])}}" target="_blank">Oku ve Güncelle</a></td>

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
