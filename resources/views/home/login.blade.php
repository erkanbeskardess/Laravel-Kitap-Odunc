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
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form" >
            <div class="sign-in-htm">
                <div class="group">

                    <input name="email" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şifre</label>
                    <input  name="password" type="password" class="input" data-type="password">
                </div>

                <div class="group">
                    <button class="button" type="submit">Giriş</button>
                </div>

                <label style="color: red" for="user" class="label"><label style="color: red">Bilgi.:</label>Üye olmadan giriş yapamazsınız</label>

            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
