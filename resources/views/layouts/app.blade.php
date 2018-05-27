<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-custom flex-column flex-md-row fixed-top" role="navigation">

    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>

    @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
    @else

        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                    <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                            </a>
                            <div class="message-body">
                                <small class="pull-right">3 mins ago</small>
                                <a href="#">
                                    <strong>John Doe</strong> commented on <strong>your photo</strong>.
                                </a>
                                <br>
                                <small class="text-muted">
                                    1:24 pm - 25/03/2015
                                </small>
                            </div>
                        </div>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                            </a>
                            <div class="message-body">
                                <small class="pull-right">1 hour ago</small>
                                <a href="#">
                                    New message from <strong>Jane Doe</strong>.
                                </a>
                                <br>
                                <small class="text-muted">
                                    12:27 pm - 25/03/2015
                                </small>
                            </div>
                        </div>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <div class="all-button">
                            <a href="#">
                                <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                    <em class="fa fa-bell"></em>
                    <span class="label label-danger">5</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <em class="fa fa-envelope"></em> 1 New Message
                                <span class="pull-right text-muted small">3 mins ago</span>
                            </div>
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <div>
                                <em class="fa fa-heart"></em> 12 New Likes
                                <span class="pull-right text-muted small">4 mins ago</span>
                            </div>
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <div>
                                <em class="fa fa-user"></em> 5 New Followers
                                <span class="pull-right text-muted small">4 mins ago</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    @endguest
</nav>

<div class="container-fluid">

    <div class="row flex-xl-nowrap">
        <ul class="flex-row ml-auto mr-4 d-md-none">
            <li class="drompdown">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </li>
        </ul>
        @if(Auth::check())
            @include('layouts.sidebar')
            <main class="col-12 col-md-9 col-xl-10">
        @endif
        <main class="col-12">
            @yield('content')
        </main>
    </div>
</div>

<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>
