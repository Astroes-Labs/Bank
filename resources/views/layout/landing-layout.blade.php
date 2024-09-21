<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
    <meta name="keywords"
        content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
    <meta name="author" content="Themexriver">
    <title>{{ config('app.name') }} | Homepage</title>
    <!-- Stylesheets -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('images/favicon.png') }}" type="image/x-icon">


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    @yield('content')

    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/sticky.js') }}"></script>
    <script src="{{ url('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('js/appear.js') }}"></script>
    <script src="{{ url('js/owl.js') }}"></script>
    <script src="{{ url('js/wow.js') }}"></script>
    <script src="{{ url('js/jquery-ui.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>


</body>

</html>
