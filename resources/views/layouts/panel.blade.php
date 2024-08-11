<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/back/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/back/images/favicon.png') }}" type="image/x-icon">
    <title>پیشخوان فست کارت</title>

    <!-- Google font-->
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/linearicon.css') }}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/font-awesome.css') }}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/themify.css') }}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/ratio.css') }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/remixicon.css') }}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/feather-icon.css') }}">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/select2.min.css') }}">


    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/date-picker.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/bootstrap.css') }}">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vendors/bootstrap-tagsinput.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/vector-map.css') }}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/vendors/slick.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/css/custom.css') }}">

</head>


<body>

<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('include.panel.header')
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('include.panel.sidemenu')
        <!-- Page Sidebar Ends-->


        <!-- index body start -->
        <div class="page-body">
            @yield('content')

            <!-- Container-fluid Ends-->

            <!-- footer start-->
            @include('include.panel.footer')
            <!-- footer End-->
        </div>
        <!-- index body end -->

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">خروج</h5>
                <p>آیا برای خارج شدن مطمئن هستید؟</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">خیر</button>
                    <button id="logout-btn" type="button" class="btn  btn--yes btn-primary">بله</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="{{ asset('assets/back/js/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('assets/back/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- feather icon js -->
<script src="{{ asset('assets/back/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/back/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- scrollbar simplebar js -->
<script src="{{ asset('assets/back/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('assets/back/js/scrollbar/custom.js') }}"></script>

<!-- Sidebar jquery -->
<script src="{{ asset('assets/back/js/config.js') }}"></script>

<!-- tooltip init js -->
<script src="{{ asset('assets/back/js/tooltip-init.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/back/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/back/js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/back/js/notify/index.js') }}"></script>

<!-- Apexchar js -->
<script src="{{ asset('assets/back/js/chart/apex-chart/apex-chart1.js') }}"></script>
<script src="{{ asset('assets/back/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('assets/back/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/back/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/back/js/chart/apex-chart/chart-custom1.js') }}"></script>


<!-- slick slider js -->
<script src="{{ asset('assets/back/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/back/js/custom-slick.js') }}"></script>

<!-- customizer js -->
<script src="{{ asset('assets/back/js/customizer.js') }}"></script>

<!-- ratio js -->
<script src="{{ asset('assets/back/js/ratio.js') }}"></script>

<!-- sidebar effect -->
<script src="{{ asset('assets/back/js/sidebareffect.js') }}"></script>

<!-- Theme js -->
<script src="{{ asset('assets/back/js/script.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/back/js/bootstrap-tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/back/js/dropzone/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/back/js/dropzone/dropzone-script.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('assets/back/js/tinymce/tinymce.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('assets/back/js/select2.min.js') }}"></script>

{{--<script src="https://cdn.tiny.cloud/1/rvxvjur0dn0hr0pyvu3iaf5r2vxzsoc2f5cj8ybb5kr9so8l/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/back/js/tinymce/custom_tinymce.js') }}"></script>--}}
{{--{{ baraye tinymce bayad khate bala ro uncomment kard. id input too file add beshe }}--}}

<!-- from here to next comment, are for create post file -->


<!-- until here -->


<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#logout-btn").click(function (e) {

        ////////////
        e.preventDefault();
        //var data = $('#form-data').serialize();
        $.ajax({
            type: 'post',
            url: "{{ route('logout.post') }}",
            data: {},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                alert('kire khar');
            },
            success: function (response) {
                alert(response.success);
            },
            complete: function (response) {
                alert('kire khare 2');
            }
        });
    });

    // function printErrorMsg (msg) {
    //     $(".print-error-msg").find("ul").html('');
    //     $(".print-error-msg").css('display','block');
    //     $.each( msg, function( key, value ) {
    //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //     });
    // }

</script>
@stack('scripts')
</body>

</html>
