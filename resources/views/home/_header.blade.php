<header id="header" class="top-head">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 left-rs">
                    <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('assets')}}/images/logo.png" alt="" /></a>
                    </div>
                    <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                            <input type="text" class="form-control" placeholder="Aradığınız kitabın ismi...">
                        </div>
                    </form>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="right-nav">
                        <div class="login-sr">
                            <div class="login-signup">
                                <ul>
                                    <li><a class="h-i"  href="{{route('aboutus')}}">Bize Dair..</a></li>
                                    <li><a class="h-i"  href="{{route('myprofile')}}">{{Auth::user()->name}}</a></li>
                                    <li><a class="custom-b" href="{{route('admin_logout')}}">Çıkış</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="help-r hidden-xs">
                            <div class="help-box">
                                <ul>
                                    <li> <a data-toggle="modal" data-target="#myModal" href="#"> <img src="{{asset('assets')}}/images/flag.png" alt="" /> </a> </li>
                                    <li> <a href="{{route('myprofile')}}"><img class="h-i" /> Hesabım </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-b hidden-xs">
                            <div class="nav-box">
                                <ul>
                                    <li><a href="{{route('nasıl')}}">Nasıl Kitap Ödünç Alabilirim ?</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-fluid -->
    </nav>
</header>
