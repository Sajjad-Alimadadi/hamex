<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>موبایل کیت - کیت رابط کاربری موبایل</title>
    <meta name="description" content="موبایل کیت - کیت رابط کاربری موبایل">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html"/>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->


<!-- App Capsule -->
<div id="appCapsule" class="pt-0">

    <div class="login-form mt-2">
        <div class="section">
            <img src="/assets/img/sample/photo/vector4.png" alt="image" class="form-image">
        </div>
        <div class="section mt-1">
            <h1>HOMEX</h1>
            <h4>لطفا شماره موبایل خود را وارد کنید</h4>
        </div>
        <div class="section mt-1 mb-5">
            <form action="/verification" method="post">
                @csrf
                <!-- Equivalent to... -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <input type="text" class="form-control" name="mobile" placeholder="*******09">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">ارسال کد تایید پیامکی</button>
                </div>

            </form>
        </div>
    </div>


</div>
<!-- * App Capsule -->


<!-- ============== Js Files ==============  -->
<!-- Bootstrap -->
<script src="/assets/js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<script type="module" src="/assets/js/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="/assets/js/plugins/splide/splide.min.js"></script>
<!-- ProgressBar js -->
<script src="/assets/js/plugins/progressbar-js/progressbar.min.js"></script>
<!-- Base Js File -->
<script src="/assets/js/base.js"></script>

</body>

</html>