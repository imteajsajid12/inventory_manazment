<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    <!-- jqurey -->
<!-- jqurey -->
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}


 <!-- Styles -->
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <script src="{{ asset('css/popper.min.js') }}"></script>
 <script src="{{ asset('css/bootstrap.min.js') }}"></script> --}}


<script src="{{ asset('css/jquery-3.2.1.slim.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet') }}" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    @stack('css')
</head>
<body class="animsition">
    <div id="app">
    <main class="py-4">
        @yield('content')
    </main>

</div>
    </div>
     {{-- <!-- Jquery JS-->
     <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script> --}}
     <!-- Bootstrap JS-->


     <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
     <!-- Vendor JS       -->
     <script src="{{ asset('vendor/slick/slick.min.js') }}">
     </script>
     <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
     <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
     </script>
     <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
     </script>
     <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
     <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
     <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
     <script src="{{ asset('vendor/select2/select2.min.js') }}">
     </script>

     <!-- Main JS-->
     <script src="{{ asset('js/main.js') }}"></script>
     @stack('js')


 <!-- end document-->

</body>
</html>
