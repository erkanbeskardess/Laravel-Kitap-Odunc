@extends('layouts.admin')
@section('title','Düzenleme')
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

                        </ol>
                        @auth

                            <a href="{{route('admin_logout')}}" target="_blank"
                               class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Çıkış</a>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Kategori Düzenleme</h3>
                    </div>
                    <div class="white-box">
                        <h3 class="box-title">FORM</h3>

                        <div class="container-contact100">
                            <div class="wrap-contact100">
                                <form  action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" class="contact100-form validate-form">
                                    @csrf
				<span class="contact100-form-title">

				</span>
                                    <select name="parent_id">
                                        <option selected="selected">Ana Kategori</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"  @if ($rs->id == $data->parent_id) selected="selected" @endif >{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                        @endforeach
                                    </select>

                                <div class="wrap-input100 validate-input" >

                                        <input class="input100"  type="text" name="title" value="{{$data->title}}" placeholder="Kategorisi">
                                    </div>

                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="description" value="{{$data->description}}" placeholder="Adı">
                                    </div>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100"  type="text" name="keywords" value="{{$data->keywords}}" placeholder="Kitabın Adı">
                                    </div>

                                    <div class="contact100-form-checkbox" >
                                       Statü  <label> {{$data->status}}</label>
<br>
                                        <select name="status">

                                            <option value="true">True</option>
                                            <option value="false">False</option>
                                        </select>

                                    </div>






                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button class="contact100-form-btn">
                                                Düzenle
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div id="dropDownSelect1"></div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

@endsection
