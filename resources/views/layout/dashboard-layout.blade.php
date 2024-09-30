<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ config('app.name') }},digital banking
">
    <meta name="description" content="{{ config('app.name') }} is a fully online banking system.
">
    <link rel="canonical" href="index.htm">
    {{-- change the shortcut icon and icon --}}
    <link rel="shortcut icon" href="{{ url('assets/global/images/SlBP02BCpepDoEeCM5jr.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('assets/global/images/SlBP02BCpepDoEeCM5jr.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/global/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/front/css/styles.css?v=1.3') }}">
    <link href="{{ url('css/toastr.min.css') }}" rel="stylesheet">
    @yield('extraCss')

    <style>
        //The Custom CSS will be added on the site head tag
        .site-head-tag {
            margin: 0;
            padding: 0;
        }
    </style>
    <title> {{ config('app.name') }} - Dashboard
    </title>
</head>

<body class="">

    {{-- @include('layout.l-preloader') --}}
    @yield('content')
    <script src="{{ url('assets/global/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/global/js/jquery-migrate.js') }}"></script>
    <script src="{{ url('assets/global/js/lucide.min.js') }}"></script>
    <script src="{{ url('assets/front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/front/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/front/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('assets/global/js/simple-notify.min.js') }}"></script>
    <script src="{{ url('assets/global/js/custom.js?v=1.1') }}"></script>
    <script src="{{ url('assets/front/js/magnific.min.js') }}"></script>
    <script src="{{ url('assets/front/js/swiper.min.js') }}"></script>
    <script src="{{ url('assets/front/js/cookie.js') }}"></script>
    <script src="{{ url('assets/front/js/main.js?v=1.0') }}"></script>
    <script src="{{ url('assets/front/js/parallax.min.js') }}"></script>
    <script src="{{ url('assets/front/js/parallax-scroll.js') }}"></script>
    <script src="{{ url('assets/front/js/meanmenu.min.js') }}"></script>
    <script src="{{ url('assets/front/js/aos.js') }}"></script>
    <script src="{{ url('assets/global/js/lucide.min.js') }}"></script>
    <script src="{{ url('assets/global/js/pusher.min.js') }}"></script>
    <script src="{{ url('assets/global/js/dashboard.js') }}"></script>
    <script src="{{ url('js/toastr.min.js') }}"></script>
    @yield('extraJs')

    {{-- @if (auth()->check() && Route::currentRouteName() === 'user.dashboard')

    @endif --}}




</body>

</html>
