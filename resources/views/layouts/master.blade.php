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


<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/dashboard/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/dashboard/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/mdbpro.min.css">



    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
<!-- Font Awesome -->

</head>

<body class="grey lighten-3">

<!--Main Navigation-->
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
    <div class="sidebar-fixed position-fixed mt-4">

        <a class="logo-wrapper waves-effect">
            <img src="/img/fuel.gif" class="img-fluid" alt="">
        </a>

        @auth
        <div class="list-group list-group-flush">

            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="#" class="waves-effect">Submit listing</a>
                            </li>
                            <li><a href="#" class="waves-effect">Registration form</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="#" class="waves-effect">For bloggers</a>
                            </li>
                            <li><a href="#" class="waves-effect">For authors</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="#" class="waves-effect">Introduction</a>
                            </li>
                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                            </li>
                        </ul>
                    </div>
                </li>

        <!-- Sidebar -->

                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Contact Details</a>

                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-table mr-3"></i>User Manuals</a>

                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-map mr-3"></i>Issues
                </a>

                @if(auth()->user()->role == 'manager')

                    <a href="{{ route("fuel.create")}}" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-pie-chart mr-3"></i>purchase
                    </a>
                    <div class="collapsible-body">
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('fuelpurchase.create')}}" class="waves-effect">Fuel Purchase</a>
                            </li>
                            <li>
                                <a href="{{ route('lubricantpurchase.create')}}" class="waves-effect">Lubricant Purchase</a>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('fuel.create') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Staff Details
                </a>

                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>view Reports
                </a>

                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>salary Details
                </a>
                @endif

                @if(auth()->user()->role == 'deo')

                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effectt">
                    <i class="fa fa-pie-chart mr-3"></i>Sales
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('fuelsale.create')}}">Fuel Sales</a>
                    </li>
                    <li>
                        <a href="{{ route('lubricantsale.create')}}">Lubricant sales</a>
                    </li>
                </ul>



                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Register
                </a>
                <ul class="nav nav-second-level">

                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('fuel.create')}}" class="waves-effect">Fuel Register</a>
                    </li>
                    <li>
                        <a href="{{ route('lubricant.create')}}" class="waves-effect">Lubricant Regiser</a>
                    </li>
                    <li>
                        <a href="{{ route('debtor.create')}}" class="waves-effect">Debtor Regiser</a>
                    </li>
                    <li>
                        <a href="{{ route('pump.create')}}" class="waves-effect">Pump Regiser</a>
                    </li>
                    <li>
                        <a href="{{ route('pumper.create')}}" class="waves-effect">Pumper Regiser</a>
                    </li>
                    <li>
                        <a href="{{ route('tank.create')}}" class="waves-effect">Tank Regiser</a>
                    </li>


                </ul>
                </ul>
                @endif

                @if(auth()->user()->role == 'cashier')
                <a href="{{ route('bank.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Bank Deposit
                </a>
                <a href="{{ route('deposit_debtor.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Debtor Deposit
                </a>
                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Daily Cash From Shift
                </a>
                @endif



                @if(auth()->user()->role == 'owner')
                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>view Report
                </a>
                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Staff details
                </a>
                <a href="{{ route('fuel.create')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Salary Details
                </a>
                @endif

        </div>
        @endauth

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



<footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <!--Call to action-->


    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fa fa-facebook mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>

        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
            <i class="fa fa-google-plus mr-3"></i>
        </a>

        <a href="https://dribbble.com/mdbootstrap" target="_blank">
            <i class="fa fa-dribbble mr-3"></i>
        </a>

        <a href="https://pinterest.com/mdbootstrap" target="_blank">
            <i class="fa fa-pinterest mr-3"></i>
        </a>

        <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
            <i class="fa fa-github mr-3"></i>
        </a>

        <a href="http://codepen.io/mdbootstrap/" target="_blank">
            <i class="fa fa-codepen mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js" ></script>
<script src="/js/bootstrap.js" ></script>
<script src="/js/mdb.js" ></script>
<script src="/js/compiled.min.js" ></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

@yield('scripts')

</body>
</html>
