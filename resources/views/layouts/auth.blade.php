<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href=" {{ asset('assets/auth/images/favicon/1.png') }} " type="image/x-icon">
    <title>ورود به حساب کاربری</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/bootstrap.css') }} ">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/bootstrap.rtl.css') }} ">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/font-awesome.css') }} ">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/feather-icon.css') }} ">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/slick/slick.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/vendors/slick/slick-theme.css') }} ">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/bulk-style.css') }} ">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/custom.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/font.css') }} ">
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


@yield('content')

{{--

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">آدرس خود را انتخاب کنید</h5>
                <p class="mt-1 text-content">آدرس خود را وارد کنید تا ما پیشنهاد را برای منطقه شما مشخص می کنیم.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="محل خود را جستجو کنید">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>انتخاب مکان شما</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>آلاباما</h6>
                                <span>حداقل: 100 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>آریزوانا</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کالیفرنیا</h6>
                                <span>حداقل: 170 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>ایران</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>فلوریدا</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>جورجیا</h6>
                                <span>حداقل: 110 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کانزاس</h6>
                                <span>حداقل: 130 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>مینه سوتا</h6>
                                <span>حداقل: 140 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>نیویورک</h6>
                                <span>حداقل: 120 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>واشنگتن</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">پرفروش ترین های امروز</h5>
                    <p class="mt-1 text-content">محصولات پیشنهادی برای شما</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src=" {{ asset('assets/auth/images/vegetable/product/10.png') }} " class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src=" {{ asset('assets/auth/images/vegetable/product/11.png') }} " class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src=" {{ asset('assets/auth/images/vegetable/product/12.png') }} " class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src=" {{ asset('assets/auth/images/vegetable/product/13.png') }} " class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان <del>55.720</del> <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
<!-- Deal Box Modal End -->

<!-- Tap to top start -->
{{--

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

--}}
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="{{ asset('assets/auth/js/jquery-3.6.0.min.js') }} "></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/auth/js/bootstrap/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/auth/js/bootstrap/popper.min.js') }} "></script>

<!-- feather icon js-->
<script src="{{ asset('assets/auth/js/feather/feather.min.js') }} "></script>
<script src="{{ asset('assets/auth/js/feather/feather-icon.js') }} "></script>

<!-- Slick js-->
<script src="{{ asset('assets/auth/js/slick/slick.js') }} "></script>
<script src="{{ asset('assets/auth/js/slick/slick-animation.min.js') }} "></script>
<script src="{{ asset('assets/auth/js/slick/custom_slick.js') }} "></script>

<!-- Lazyload Js -->
<script src="{{ asset('assets/auth/js/lazysizes.min.js') }} "></script>

<!-- script js -->
<script src="{{ asset('assets/auth/js/script.js') }} "></script>

<!-- thme setting js -->
<script src="{{ asset('assets/auth/js/theme-setting.js') }} "></script>
</body>

</html>
