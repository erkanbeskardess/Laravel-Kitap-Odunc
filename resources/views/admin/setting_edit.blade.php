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
                        <h3 class="box-title">Ürün Düzenleme</h3>
                    </div>
                    <div class="white-box">
                        <h3 class="box-title">FORM</h3>

                        <div class="container-contact100">
                            <div class="wrap-contact100">
                                <form  action="{{route('admin_setting_update')}}" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
                                    @csrf
				<span class="contact100-form-title">

				</span>

                                    <div class="contact100-form-checkbox">
                                        <input class="input100" type="hidden" name="id" value="{{$data->id}} " placeholder="">
                                    </div>

                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="title" value="{{$data->title}} " placeholder=" {{$data->title}}">

                                    </div>
                                    <label>Anahtar Kelime</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="keywords" value="{{$data->keywords}} " placeholder="{{$data->keywords}}">
                                    </div>
                                    <label>Açıklama</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="description" value="{{$data->description}} " placeholder="{{$data->description}}">
                                    </div>
                                    <label>Şirket adı:</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="company" value="{{$data->company}} " placeholder="{{$data->company}}">
                                    </div>
                                    <label>Tel No.:</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="phone" value="{{$data->phone}} " >
                                    </div>

                                    <label>Fax No.</label>

                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="fax" value="{{$data->fax}} " >
                                    </div>
                                    <label>E-mail</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="email" value="{{$data->email}} " >
                                    </div>
                                    <label>SMTPSERVER</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="smptpserver" value="{{$data->smptpserver}}">
                                    </div>
                                    <label>SMTPEMAİL</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="smptpemail" value="{{$data->smptpemail}} "placeholder="{{$data->smptppemail}}">
                                    </div>
                                    <label>SMTPPASSWORD</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="password" name="smptppassword" value="{{$data->smptppassword}} "placeholder="{{$data->smptppassword}}">
                                    </div>
                                    <label>SMTPPORT</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="smptpport" value="{{$data->smptpport}} "placeholder="{{$data->smptpport}}">
                                    </div>
                                    <label>Facebook</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="facebook" value="{{$data->facebook}} "placeholder="{{$data->facebook}}">
                                    </div>
                                    <label>İnstagram</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="instagram" value="{{$data->instagram}} "placeholder="{{$data->instagram}}">
                                    </div>
                                    <label>Twitter</label>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="twitter" value="{{$data->twitter}} "placeholder="{{$data->twitter}}">
                                    </div>
                                    <label>Hakkımda</label>
                                    <div class="wrap-input100 validate-input" >
                                        <textarea class="form-control" type="text" id="summary-ckeditor" name="aboutus">{{$data->aboutus}}</textarea>
                                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'summary-ckeditor' );
                                        </script>
                                    </div>
                                    <label>Adres</label>
                                    <div class="wrap-input100 validate-input" >
                                        <textarea class="form-control" type="text"  id="address" name="address" >{{$data->address}}</textarea>
                                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'address' );
                                        </script>
                                    </div>
                                    <label>Referanslar</label>
                                    <div class="wrap-input100 validate-input" >
                                        <textarea class="form-control" type="text" id="references" name="references">{{$data->references}}</textarea>
                                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'references' );
                                        </script>
                                    </div>







                                    <label>Etkileşim</label>
                                    <div class="wrap-input100 validate-input" >
                                        <textarea class="form-control" type="text" id="contanct" name="contanct">{{$data->contanct}}</textarea>
                                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'contanct' );
                                        </script>
                                    </div>
                                    <label> Statü </label>    ={{$data->status}}<br>

                                    <div class="contact100-form-checkbox" >

                                        <select value="{{$data->status}}" name="status">

                                            <option>True</option>
                                            <option>False</option>
                                        </select>

                                    </div>






                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button  class="contact100-form-btn">
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
