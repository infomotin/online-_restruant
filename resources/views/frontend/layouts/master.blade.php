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
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/toastr.min.css')}}">
</head>

<body>
    <div class="overlay-container d-none">
        <div class="overlay ">
            <span class="loader"></span>
        </div>

    </div>

    <!--=============================
        TOPBAR START
    ==============================-->
    @include('frontend.home.components.topbar')
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
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.home.components.scroll')
    @include('frontend.layouts.global-script')
    

    
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
    <script src="{{asset('frontend/js/toastr.min.js')}}"></script>
        <script>
            // function imp 
            toastr.options.closeMethod = 'fadeOut';
            toastr.options.closeDuration = 400;
            toastr.options.closeEasing = 'swing';
            toastr.options.preventDuplicates = true;
            toastr.options.timeOut = 5; // How long the toast will display without user interaction
            toastr.options.extendedTimeOut = 5; // How long the toast will display after a user hovers over it

            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{$error}}');
                @endforeach
            @endif
        </script>
        {{-- //modal function Calling  --}}
        {{-- main custom js  --}}
        
</body>

</html>