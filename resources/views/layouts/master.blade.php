<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fuel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}



    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.css">
    <link rel="stylesheet" href="/css/mdbpro.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="grey lighten-3">>

<header>


        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                    <strong class="blue-text">Fuel Station  Management System</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->


            </div>

            </div>
        </nav>
        <!-- Navbar -->


        <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <img src="/img/fuel.gif" class="img-fluid" width="200px" height="200px" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Contact Details</a>

                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-table mr-3"></i>User Manuals</a>

                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-map mr-3"></i>Issues</a>
                @if(auth()->user()->role == 'deo')
                    <!-- TODO: data entry operator list items -->
                @endif
            </div>

    </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

{{--@include('layouts.includes.navbar')--}}

<!-- Sidebar -->
    {{--<div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            <img src="/img/fuel.gif" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item active waves-effect">
                <i class="fa fa-pie-chart mr-3"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-user mr-3"></i>Contact Details</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-table mr-3"></i>User Manuals</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-map mr-3"></i>Issues</a>

        </div>

    </div>
    <!-- Sidebar -->
</header>--}}
<div id="app">




        <main class="py-5 mt-5">
        @yield('content')
    </main>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js" ></script>
<script src="/js/bootstrap.js" ></script>
<script src="/js/mdb.js" ></script>
<script src="/js/compiled.min.js" ></script>

@yield('scripts')

</body>
</html>
