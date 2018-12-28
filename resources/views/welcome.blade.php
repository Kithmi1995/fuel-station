
{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fuel S</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}




    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/welcome/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/welcome/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/welcome/css/style.min.css" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
            <strong>Fuel Station Management System</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Right -->
            <ul class="navbar-nav ml-auto">

                @if (Route::has('login'))

                <li class="nav-item">
                    @auth

                        <a href="{{ url('/home') }}" class="nav-link border border-light rounded"
                           target="_blank">
                            <i class="fa fa-github mr-2"></i>Home
                        </a>
                    @else
                    <a href="{{ route('login') }}" class="nav-link border border-light rounded"
                       target="_blank">
                        <i class="fa fa-github mr-2"></i>login
                    </a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link border border-light rounded"
                       target="_blank">
                        <i class="fa fa-github mr-2"></i>Register
                    </a>
                    @endif
                    @endauth
                </li>

                @endif
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->

<!-- Full Page Intro -->
<div class="view full-page-intro" style="background-image: url('/img/index.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="container">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4 white-text text-center text-md-left">

                    <h1 class="display-4 font-weight-bold">Fuel Station Management System</h1>

                    <hr class="hr-light">

                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>

                    <p class="mb-4 d-none d-md-block">
                        <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                            available. Create your own, stunning website.</strong>
                    </p>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-xl-5 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <!-- Heading -->
                                <h3 class="dark-grey-text text-center">
                                    <strong>Write to us:</strong>
                                </h3>
                                <hr>



                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>




                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('email') }}</strong>
                                           </span>
                                        @endif
                                    </div>


                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>




                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <label for="password" >{{ __('Password') }}</label>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                <div class="text-center">
                                    <button class="btn btn-indigo">login</button>
                                    <hr>


                                    <fieldset class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label dark-grey-text" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                    </fieldset>
                                </div>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->



<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">



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
       Fuel Station Management System

    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>
</body>

</html>
