<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('assets/front/images/1.png') }}" type="image/x-icon">
    <title>جزئیات وبلاگ</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/bootstrap.css') }}">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/bootstrap.rtl.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/feather-icon.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/slick/slick-theme.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/font.css') }}">
</head>

<body>

<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
@include('include.front.header')
<!-- Header End -->

<!-- mobile fix menu start -->
@include('include.front.mobilemenu')
<!-- mobile fix menu end -->

<!-- Breadcrumb Section Start -->
@include('include.front.breadscrumb')
<!-- Breadcrumb Section End -->

<!-- Blog Details Section Start -->
@yield('content')
<!-- Blog Details Section End -->

<!-- Footer Section Start -->
@include('include.front.footer')
<!-- Footer Section End -->

<!-- Location Modal Start -->
@include('include.front.locationmodal')
<!-- Location Modal End -->


<!-- Deal Box Modal Start -->
@include('include.front.dealbox')
<!-- Deal Box Modal End -->

<!-- Tap to top start -->
<div class="theme-option">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>رنگ</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">رنگ قالب</label>
                                <input type="color" class="form-control form-control-color" id="colorPick"
                                       value="#0da487" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>حالت</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">تیره</button>
                            <button class="btn btn-2 unline" id="lightButton">روشن</button>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>نوع</h4>
                        </div>
                        <div class="theme-setting-button rtl">
                            <button class="btn btn-2 rtl-unline">چپ چین</button>
                            <button class="btn btn-2 rtl-outline">راست چین</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>

<!-- jquery ui-->
<script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/front/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap/popper.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/front/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('assets/front/js/feather/feather-icon.js') }}"></script>

<!-- Lazyload Js -->
<script src="{{ asset('assets/front/js/lazysizes.min.js') }}"></script>

<!-- Slick js-->
<script src="{{ asset('assets/front/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/front/js/slick/slick-animation.min.js') }}"></script>
<script src="{{ asset('assets/front/js/slick/custom_slick.js') }}"></script>

<!-- WOW js -->
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/custom-wow.js') }}"></script>

<!-- script js -->
<script src="{{ asset('assets/front/js/script.js') }}"></script>

<!-- thme setting js -->
<script src="{{ asset('assets/front/js/theme-setting.js') }}"></script>
</body>

</html>
