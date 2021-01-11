<html>
<head>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/login/login.css">

</head>
<body>
<form action="{{route('admin_logincheck')}}" method="post">
@csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Giriş</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Kayıt ol</label>
        <div class="login-form" >
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Kullanıcı Adı</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şifre</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Şifremi Hatırla</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Giriş">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Şifremi Unuttum..</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Kullanıcı Adı</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şifre</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şifre Tekrar</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Email</label>
                    <input id="pass" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Kayıt Ol">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Zaten Üyeyim..</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
