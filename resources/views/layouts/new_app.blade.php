<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/new_app.css">
    <link href="/css/hopscotch.css" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body>
<div class="container-fluid w-100 h-100 Rail-way-font">

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-nav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <div class="fa fa-bars"></div>
            </button>

            <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
            <a class="nav-active-menu-sm hidden-lg-up" href="#">
                {{Route::currentRouteName()}}
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item  {{ ends_with(Request::url(), 'home') ? "active" : "" }}">
                        <a class="nav-link" href={{url("home")}}>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item {{ ends_with(Request::url(), 'mysurvey') ? "active" : "" }}">
                        <a class="nav-link " href={{url("mysurvey")}}>
                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                            MySurvey
                        </a>
                    </li>
                    <li class="nav-item {{ ends_with(Request::url(), 'empatica') ? "active" : "" }}">
                        <a class="nav-link " href={{url("empatica")}}>
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            Empatica
                        </a>
                    </li>
                    <li class="nav-item {{ ends_with(Request::url(), 'challenges') ? "active" : "" }}">
                        <a class="nav-link " href={{url("challenges")}}>
                            <i class="fa fa-certificate" aria-hidden="true"></i>
                            Challenges
                        </a>
                    </li>
                    <li class="nav-item {{ ends_with(Request::url(), 'rank') ? "active" : "" }}">
                        <a class="nav-link " href={{url("rank")}}>
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Rank
                        </a>
                    </li>
                    <li class="nav-item {{ ends_with(Request::url(), 'achievement') ? "active" : "" }}">
                        <a class="nav-link " href={{url("achievement")}}>
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                            Achievement
                        </a>
                    </li>
                    {{-- PROFILE is in the collapsed meneu in sm screen --}}
                    <li class="nav-item profile hidden-lg-up">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <img src={{ Auth::user()->avatar }} class="rounded" width="20" height="20">
                            {{ title_case(Auth::user()->name )}} <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <button class="dropdown-item Bg-color-cloud list-group-item border-0 pt-2 pb-2"
                                    onclick="window.location.href='/profile'"><a class="mr-auto">Change profile
                                    Picture </a>
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </button>

                            <div class="dropdown-divider Bg-color-midnight"></div>

                            <button class="dropdown-item border-0 Bg-color-cloud list-group-item border-0 pt-2 pb-2"
                                    href="{{ url('logout') }}"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                <a class="mr-auto">Sign Out</a>
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </button>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-nav ml-auto hidden-md-down">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src={{ Auth::user()->avatar }} class="rounded" width="20" height="20"
                             style="margin-bottom: 4px">
                        {{ title_case(Auth::user()->name )}} <b class="caret"></b></a>
                    <ul class="dropdown-menu p-3 m-2 dropdown-menu-right">
                        <li class="dropdown-item list-group-item border-0">
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4 p-0">
                                        <p class="text-center">
                                            <img src={{ Auth::user()->avatar }} class="rounded" width="100" height="100">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong> {{ title_case(Auth::user()->name )}}</strong></p>
                                        <p class="text-left small">{{ Auth::user()->email }}</p>
                                        <p class="text-left">
                                            <a href="{{url('profile')}}" class="btn btn-success btn-block btn-sm">
                                                Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <div class="dropdown-divider"></div>

                        <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">Account
                                Settings</a>
                            <i class="fa fa-cog justify-content-end text-right" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-divider"></div>

                        <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">User
                                stats</a>
                            <i class="fa fa-area-chart" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-divider"></div>

                        <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a
                                    class="mr-auto">Messages </a>
                            <span class="badge badge-default badge-pill"> 42 </span>
                        </button>
                        <div class="dropdown-divider"></div>

                        <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                            <a class="mr-auto">Sign Out</a>
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{  csrf_field() }}
                            </form>
                        </button>
                    </ul>
                </div>


            </div>
        </div>
    </nav>
<div class="jumbotron">
    @yield('content')
</div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="/js/app.js"></script>
<script src="/js/hopscotch.js"></script>
<script src="/js/tour.js"></script>
</body>
</html>
