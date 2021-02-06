<html>
<head>
    <link rel="icon" type="image/png" href="{{asset('assets')}}/admin/add/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/add/css/main.css">
</head>


    <div class="page-wrapper" style="min-height: 250px;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
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


                        <div class="container-contact100">
                            <div class="wrap-contact100">
                                <form  action="{{route('admin_image_store' , ['books_id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="contact100-form validate-form">
                                    @csrf
				<span class="contact100-form-title">

				</span>




                                    <h1>Fotoğraf</h1>
                                    <br>
                                    Ürün adı:{{$data->title}}
                                    <br>
                                    <h3>Başlık</h3>
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="title">
                                    </div>

                                    <h3>Fotoğraf</h3>
                                    <div class="wrap-input100 validate-input" >

                                        <input class="input100"  type="file" name="image">
                                    </div>
                                    <table class="table no-wrap">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Başlık</th>
                                            <th class="border-top-0">Fotoğraflar</th>
                                            <th class="border-top-0">Kategori</th>

                                        </tr>
                                        </thead>
                                        @foreach ($images as $rs )

                                            <tbody>
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>
                                                    @if ($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="100" alt="">
                                                    @endif
                                                </td>



                                                <td class="txt-oflo"><a href="{{route('admin_image_delete',['id'=>$rs->id , 'books_id'=>$data->id])}}" onclick="return confirm('Silmek İstediğinize emin misiniz?')"><img src="{{asset('assets/admin/plugins/images')}}/delete.png" height="50"></a></td>
                                            </tr>


                                            </tbody>
                                        @endforeach
                                    </table>




                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button  class="contact100-form-btn">
                                                EKLE
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

</html>
