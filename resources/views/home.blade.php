<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fuel Station Management System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/dashboard/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/dashboard/css/style.min.css" rel="stylesheet">
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">


                           {{-- <a href="{{ route('login') }}" class="nav-link border border-light rounded"
                               target="_blank">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </a>--}}

                            <a class="nav-link border border-light rounded" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </ul>
            </div>


            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            <img src="/img/fuel.gif" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item active waves-effect">
                <i class="fa fa-pie-chart mr-3"></i>Dashboard
            </a>
            <a href="{{ route('contact.index')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-user mr-3"></i>Contact Details</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-table mr-3"></i>User Manuals</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-map mr-3"></i>Issues</a>
        </div>
    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->

        <!-- Heading -->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-9 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <img src="img/index.jpg"  width="700px" height="500px" alt="">
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-4">

                <!--Card-->


                <!--Card-->
                <div class="card mb-4">

                    <!--Card content-->
                    <div class="card-body">

                        <!-- List group links -->
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action waves-effect">Sales
                                <span class="badge badge-success badge-pill pull-right">22%
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Traffic
                                <span class="badge badge-danger badge-pill pull-right">5%
                                        <i class="fa fa-arrow-down ml-1"></i>
                                    </span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Orders
                                <span class="badge badge-primary badge-pill pull-right">14</span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Issues
                                <span class="badge badge-primary badge-pill pull-right">123</span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Messages
                                <span class="badge badge-primary badge-pill pull-right">8</span>
                            </a>
                        </div>
                        <!-- List group links -->

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
        <div class="row wow fadeIn">
        <!--Grid column-->
         <div class="col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">


                    Vision<br>
                    Our vision is to become Srilanka’s leading private brand for gas station and convenience stores, with a network that consistently offers low fuel prices,
                    fuel quality standards and a strong brand image.

                    <!-- Table  -->

                </div>

            </div>
            <!--/.Card-->

         </div>
        <!--Grid column-->

        <!--Grid column-->
         <div class="col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">

                    Mision<br>
                    FUEL is the reliable, Srilankas brand for fuel stations and convenience stores that offers the flexibility, attractive fuel prices, value-added programs, and strong brand identity that dealers and distributors need to succeed,
                    while giving consumers quality fuel at low prices.


                </div>

            </div>
            <!--/.Card-->

         </div>
        <!--Grid column-->
        </div>





    </div>
</main>
<!--Main layout-->

<!--Footer-->
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
        Fuel Station Management System

    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/dashboard/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/dashboard/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/dashboard/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/dashboard/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>


<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);

    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
</script>
</body>

</html>
