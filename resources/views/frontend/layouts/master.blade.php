<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>FoodPark || Restaurant Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.exzoom.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/rtl.css')}}"> -->
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    @include('frontend.layouts.topbar')
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    @include('frontend.layouts.menu')
    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BANNER START
    ==============================-->
    @include('frontend.layouts.banner')
    <!--=============================
        BANNER END
    ==============================-->


    <!--=============================
        WHY CHOOSE START
    ==============================-->
    @include('frontend.layouts.choose')
    <!--=============================
        WHY CHOOSE END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
    @include('frontend.layouts.offer')
    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    @include('frontend.layouts.menu_item')
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    @include('frontend.layouts.slider')
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    @include('frontend.layouts.team')
    <!--=============================
        TEAM END
    ==============================-->


    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    @include('frontend.layouts.download')
    <!--=============================
        DOWNLOAD APP END
    ==============================-->


    <!--=============================
       TESTIMONIAL  START
    ==============================-->
    @include('frontend.layouts.testimonial')
    <!--=============================
        TESTIMONIAL END
    ==============================-->


    <!--=============================
        COUNTER START
    ==============================-->
    @include('frontend.layouts.counter')
    <!--=============================
        COUNTER END
    ==============================-->


    <!--=============================
        BLOG 2 START
    ==============================-->
    @include('frontend.layouts.bloge')
    <!--=============================
        BLOG 2 END
    ==============================-->


    @include('frontend.layouts.footer')
    @include('frontend.layouts.scroll')
    

    
    <!--jquery library js-->
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <!--font-awesome js-->
    <script src="{{asset('frontend/js/Font-Awesome.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!-- isotop js -->
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{asset('frontend/js/simplyCountdown.js')}}"></script>
    <!-- counter up js -->
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countup.min.js')}}"></script>
    <!-- nice select js -->
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <!-- venobox js -->
    <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
    <!-- sticky sidebar js -->
    <script src="{{asset('frontend/js/sticky_sidebar.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!-- ex zoom js -->
    <script src="{{asset('frontend/js/jquery.exzoom.js')}}"></script>

    <!--main/custom js-->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>