<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>HAMEX</title>
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
            <img src="/assets/img/sample/photo/vector2.png" alt="image" class="form-image">
        </div>
        <div class="section mt-1">
            <h1>HAMEX</h1>
            <h4>تبریک احراز هویت شما با موفقیت انجام شد</h4>
        </div>


        <div class="section mt-1 mb-5">
            <form action="/verification/check/submit" method="post"post>

                @csrf
                <!-- Equivalent to... -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <input type="text" class="form-control" id="name" name="name" placeholder="نام" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle" role="img" class="md hydrated"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <input type="text" class="form-control" id="family" name="family" placeholder="نام خانوادگی" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle" role="img" class="md hydrated"></ion-icon>
                        </i>
                    </div>
                </div>


                <div class="section full mb-2 mt-2">
                    <div class="section-title">نوع بازدید</div>
                    <div class="wide-block p-0">

                        <div class="input-list">
                            <div class="form-check">
                                <input class="form-check-input" onchange="tour()" type="radio" name="typeperson" value="normal" id="radioList1" checked>
                                <label class="form-check-label" for="radioList1">بازدید کننده عادی</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" onchange="tour()" type="radio" name="typeperson" value="expert" id="radioList2">
                                <label class="form-check-label" for="radioList2">بازدید کننده فعال لوازم خانگی</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" onchange="tour()" type="radio" name="typeperson" value="tour" id="radioList3">
                                <label class="form-check-label" for="radioList3">بازدید کننده تور دانشگاهی</label>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="tour" class="section full mt-4 mb-2">
                    <div class="section-title">اطلاعات تور دانشگاهی</div>
                    <div class="wide-block pb-1 pt-2">

                        <div class="form-group boxed mb-1">
                            <div class="input-wrapper">
                                <label class="form-label" for="university_id">نام دانشگاه</label>
                                <select class="form-control form-select" id="university_id" name="university_id">
                                    <option selected="selected" style="display: none;">نام دانشگاه را انتخاب نمایید</option>
                                    <option value="0">انتخاب شهر</option>
                                    <option value="1">تهران</option>
                                    <option value="2">اصفهان</option>
                                    <option value="3">تبریز</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group boxed mb-1">
                            <div class="input-wrapper">
                                <label class="form-label" for="grade">مقطع تحصیلی</label>
                                <select class="form-control form-select" id="grade" name="grade">
                                    <option selected="selected" style="display: none;">مقطع تحصیلی را انتخاب نمایید</option>
                                    <option value="1">کاردانی</option>
                                    <option value="2">کارشناسی</option>
                                    <option value="3">کارشناسی ارشد</option>
                                    <option value="4">دکترا و بالاتر</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="form-label" for="branch">رشته تحصیلی</label>
                                <input type="text" class="form-control" id="branch" name="branch" placeholder="رشته تحصیلی" autocomplete="off">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="mb-05 mt-2">ترم در حال تحصیل</div>
                        <div class="stepper mb-2">
                            <a href="#" class="stepper-button stepper-down">-</a>
                            <input type="text" class="form-control" name="semester" value="1">
                            <a href="#" class="stepper-button stepper-up">+</a>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">تایید و تکمیل نهایی مشخصات</button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-outline-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
        </div>

    </div>

</div>
<!-- * App Capsule -->

<!-- ios style-->
<div id="notification-15" class="notification-box">
    <div class="notification-dialog ios-style bg-success">
        <div class="notification-header">
            <div class="in">
                <strong>نوتیفیکیشن</strong>
            </div>
            <div class="right">
                <span>الان</span>
                <a href="#" class="close-button">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </div>
        <div class="notification-content">
            <div class="in">
                <h3 class="subtitle">تبریک</h3>
                <div class="text">
                    تبریک احراز هویت شما با موفقیت انجام شد
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * ios style -->


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

<script>
    setTimeout(() => {
        notification('notification-15', 3000);
    }, 1200);

    document.getElementById('tour').style.display = 'none';

    function tour() {

        if (document.getElementById('radioList3').checked === true) {
            document.getElementById('tour').style.display = 'block';
        } else {
            document.getElementById('tour').style.display = 'none';
        }
    }

</script>

</body>

</html>
