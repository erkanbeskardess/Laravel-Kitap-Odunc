<html>
<head>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/login/login.css">

</head>
<body>
<form action="{{route('user_add')}}" method="post">
@csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Giriş</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form" >
            <div class="sign-in-htm">
                <div class="group">
                    <label for="pass" class="label">Adı</label>
                    <input name="name" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">E-mail</label>
                    <input name="email" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şifre</label>
                    <input  name="password"  class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Adres</label>
                    <input  name="address"  class="input" >
                </div>
                <div class="group">
                    <label for="pass" class="label">Telefon</label>
                    <input  name="phone"  class="input" >
                </div>

                <div class="group">
                    <button class="button" type="submit">Kayıt</button>
                </div>

                <label style="color: red" for="user" class="label"><label style="color: red">Bilgi.:</label></label>

            </div>
        </div>
    </div>
</div>
</form>

</body>
</html>
