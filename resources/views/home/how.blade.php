<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fontawesome css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate-wow.css">
    <script src="{{asset('assets')}}/slider/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>

    <!--main css-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.min.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/menus.css">

    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/function.js"></script>
</head>
<body>
@include('home._header')


<div class="col-md-12 hidden-xs">
    <div class="furniture-right">
        <h3>Nasıl Kitap Ödünç Alabilirim ?</h3>
        <div class="right-list-f" style="font-family: 'Comic Sans MS';font-size:18px;  ">
            - Ödünç verme işlemleri üye kartıyla veya TC Kimlik numarasını (veya en az altı ay oturma izni almış yabancı kullanıcılar için yabancı kimlik numarasını) gösterir belge ile yapılır.
            <br>
            - Yazma ve nadir eserler, danışma kaynakları, kullanıcılar tarafından sıklıkla aranan materyaller ile süreli yayınların son sayıları hariç, kütüphane materyali ücretsiz olarak ödünç verilir.
            <br>
            - Kullanıcıya üç kitap, üç kitap dışı materyal olmak üzere en fazla altı materyal ödünç verilir. Ödünç verme süresi kitaplar için on beş gün, kitap dışı materyaller için yedi gündür. Bu sayı ve süreler, kullanıcıların sözlü (yüz yüze, telefon) ve yazılı (elektronik posta) başvuru üzerine kütüphane yönetimi tarafından artırılabilir ancak azaltılamaz.
            <br>
            - Kullanıcı ödünç alınmış materyalin iade süresini uzatabilir. Ancak materyal başka kullanıcılar tarafından önceden ayırtılmışsa süre uzatılmaz. Aranan kütüphane materyali başka bir kullanıcı tarafından ödünç alınmış ise, geri getirildiğinde ödünç alınmak üzere ön ayırtma yaptırılabilir.
            <br>
            - Ödünç verme kurallarına uymamayı (materyali sürekli geç getirme, ödünç alınan materyali yıpratma veya iade etmeme, vb.) alışkanlık haline getirmiş kullanıcılara, kütüphane yönetimi tarafından kütüphane kayıtları da esas alınarak, belirli bir süre hak mahrumiyeti uygulanır.
            <br>
            - Materyali geç getiren kullanıcıya herhangi bir nakdi ceza tahakkuk ettirilmez. Ancak ödünç aldığı materyali zamanında teslim etmeyen kullanıcıya, materyali teslim edinceye kadar yeni materyal ödünç verilmez. Kullanıcı uyarılır. Uyarılar önce sözlü olarak, elektronik postayla veya telefonla yapılır. Sonuç alınamaması durumunda, son uyarı resmi yazı ile yapılır. Hazırlanan resmi yazıda materyalin iade edilmesi için tanınan son süre açıkça belirtilir. Resmi yazı kullanıcıya iadeli- taahhütlü olarak gönderilir. Materyali iade etmeyen, kullanılamayacak derecede yıpratan veya kaybeden kullanıcı, materyalin rayiç bedelini öder. Ödeme için harcama yetkilisi tarafından en az üç kişiden oluşan bir Değer Tespit Komisyonu oluşturulur. Materyalin o günkü rayiç bedeli üzerinden değeri belirlenir ve hazırlanan tutanakla beraber kullanıcıya tebliğ edilir. Kullanıcı, kendisine tebliğ edilen bedeli hazineye gelir kaydetmek üzere Maliye Bakanlığı’nın ilgili birimine öder. Ödemeye ilişkin makbuz kütüphaneye teslim edilir. Komisyonun hazırladığı tutanağa makbuz eklenerek materyal kayıtlardan çıkartılır. Materyali iade etmeyen veya bedelini ödemeyen kullanıcılar hakkında yürürlükte olan Türk Ceza Kanununun ilgili maddelerine göre işlem yapılır.


        </div>
    </div>
    <br>
    <br>
    <br>
@include('home._footer')










</body>
</html>
