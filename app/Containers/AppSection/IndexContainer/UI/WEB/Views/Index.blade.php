<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>هامکس</title>
    <meta name="description" content="هامکس">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html"/>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="pageTitle">
        جشنواره هامکس
    </div>
    <div class="right">
        <a href="/logout" class="headerButton">
            <ion-icon name="power"></ion-icon>
            <span class="badge badge-danger badge-empty"></span>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">


    <div class="section full mt-5 mb-5">

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card">
                            <img src="/assets/img/sample/photo/d1.jpg" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">تبلیغات</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>


    <!-- App Capsule -->
    <div id="" class="extra-header-active">

        <div class="section full mt-2">
            <div class="section-title">
                <div class="chip chip-media">
                    <i class="chip-icon bg-primary">
                        <ion-icon name="search" role="img" class="md hydrated"></ion-icon>
                    </i>
                    <span class="chip-label">جستجو برند ، غرفه و ...</span>
                </div>
            </div>
            <div class="wide-block pt-2 pb-2">
                <form autocomplete="off" class="search-form" action="/" method="post">
                    @csrf
                    <!-- Equivalent to... -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <div class="form-group searchbox mt-1">
                        <input name="search" type="text" class="form-control" placeholder="جستجو" value="@php if(isset($result['forsearch'])){echo $result['forsearch'];} @endphp" required>
                        <i class="input-icon">
                            <ion-icon type="submit" name="search-outline"></ion-icon>
                        </i>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary shadowed me-1 mb-1 mt-1">جستجوی هوشمند</button>
                    </div>
                </form>
            </div>
        </div>
        @if (isset($result['forsearch']))
            <div class="listview-title mt-2">
                <div>
                    نتایج جستجو برای <strong class="text-primary">"{{$result['forsearch']}}"</strong>
                </div>
            </div>
        @endif
        <ul class="listview link-listview search-result mb-5">
            @if (isset($result['search']))
                @foreach($result['search'] as $item)
                    <li>
                        <a href="#">
                            <div>
                                <h4 class="mb-05">{{$item['name']}}</h4>
                                <div class="text-muted">
                                    {{$item['description']}}
                                    <div class="mt-05"><strong>{{$item['name']}}</strong></div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>

    </div>
    <!-- * App Capsule -->

    <!-- app footer -->
    <div class="appFooter">
        <div class="footer-title">
            کپی رایت © Mobilekit <span class="yearNow"></span>. تمامی حقوق محفوظ است.
        </div>


        <!-- .non-mobile-detection -->
        <div class="section non-mobile-detection">
            <p> نامعتبر - @php echo request()->ip() @endphp</p>
        </div>

        <!-- .ios-detection -->
        <div class="section ios-detection">
            <p> آی او اس - @php echo request()->ip() @endphp</p>
        </div>

        <!-- .android-detection -->
        <div class="section android-detection">
            <p> اندروید - @php echo request()->ip() @endphp</p>
        </div>

        <!-- .windowsphone-detection -->
        <div class="section windowsphone-detection">
            <p> ویندوز فون - @php echo request()->ip() @endphp</p>
        </div>

        <div class="section mt-1 mb-1">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="mb-1 d-flex align-items-center justify-content-between">
                            فعال سازی پوسته تاریک اپلیکیشن
                        </h6>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodecontent">
                        <label class="form-check-label" for="darkmodecontent"></label>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- * app footer -->

</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="#" class="item active">
        <div class="col">
            <ion-icon name="storefront-outline"></ion-icon>
            <strong>غرفه ها</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            <strong>نظرات</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="trending-up-outline"></ion-icon>
            <strong>پیشنهادات</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="shuffle-outline"></ion-icon>
            <strong>انتقادات</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="trending-down-outline"></ion-icon>
            <strong>شکایات</strong>
        </div>
    </a>

</div>
<!-- * App Bottom Menu -->

<!-- welcome notification  -->
<div id="notification-welcome" class="notification-box">
    <div class="notification-dialog android-style">
        <div class="notification-header">
            <div class="in">
                <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                <strong>هامکس</strong>
                <span>همین الان</span>
            </div>
            <a href="#" class="close-button">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="notification-content">
            <div class="in">
                <h3 class="subtitle">سلام بازدید کننده گرامی</h3>
                <div class="text">
                    بازدید کننده گرامی به جشنواره هامکس خوش آمدید ، امیدواریم لحظات خوبی را سپری کنید
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * welcome notification -->

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
    // Trigger welcome notification after 5 seconds
    setTimeout(() => {
        notification('notification-welcome', 10000);
    }, 2000);
</script>

</body>

</html>
