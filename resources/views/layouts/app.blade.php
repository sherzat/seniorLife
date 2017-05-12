<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'SeniorLife') }}</title>
    <link href="/css/new_app.css" rel="stylesheet">

    <script>
        $(document).ready(function () {
            $("li a").click(function () {
                var id = $(this).attr("id");

                $('#' + id).siblings().find(".active").removeClass("active");
                $('#' + id).addClass("active");
                localStorage.setItem("selectedolditem", id);
            });

            var selectedolditem = localStorage.getItem('selectedolditem');

            if (selectedolditem != null) {
                $('#' + selectedolditem).siblings().find(".active").removeClass("active");

                $('#' + selectedolditem).addClass("active");
            }else {
                $("#home").addClass("active");
            }
        });

//$(function () {
//    $('li a').click(function(e) {
//        e.preventDefault();
//        $('a').removeClass('active');
//        $(this).addClass('active');
//    });
//}
{{--$(document).ready(function () {--}}
    {{--$("li a").click(function () {--}}
{{--//                var id = $(this).attr("id");--}}
{{--//--}}
{{--////                $('#' + id).siblings().find(".active").removeClass("active");--}}
{{--////                $('#' + id).addClass("active");--}}
{{--//                localStorage.setItem("selectedolditem", id);--}}
{{--//            });--}}
    {{--$("a").removeClass("active");--}}
    {{--$("#{{$current_page}}").addClass("active");--}}
    {{--});--}}
    </script>
</head>
<body>

<!-- background-img class is found in app.scss file -->
<div class="jumbotron container-fluid mb-0 mt-3">
    <nav class="navbar navbar-light fixed-top bg-faded nav-customize">

        <!-- only visible in xs sreen-->
        <div class="container hidden-sm-up navbar-fonts">
            <div id="xs_nav" class="navbar-header dropdown">
                <button class="navbar-toggler navbar-toggler-right m-2 Bar-cloud ml-xs-0 hidden-lg-up" type="button"
                        data-toggle="dropdown"
                        id="navbarDropdownMenuLink" data-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fa fa-bars " aria-hidden="true"></i>
                </button>

                <ul id="nav_list" class="nav nav-pills hover-class">
                    <li class="nav-item">
                        <a id="home" class="nav-link text-white" href="/home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="mysurvey" class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                            MySurvey
                        </a>
                    </li>
                </ul>

                <div class="dropdown-menu dropdown-menu-right p-0 m-2" aria-labelledby="navbarDropdownMenuLink">
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="/empatica">
                        <a class="mr-auto">Empatica</a>
                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="/challenges">
                        <a class="mr-auto">Challenges</a>
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="/rank">
                        <a class="mr-auto">Rank</a>
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <input class="dropdown-item list-group-item border-0 pt-2 pb-2" href="/profile">
                        <a class="mr-auto">Profile</a>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"><a
                                class="mr-auto">Sign Out</a>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </button>

                </div>
            </div>
        </div>
        <!-- only visible in sm sreen-->
        <div id="sm_nav" class="container hidden-xs-down hidden-md-up ">
            <div class="navbar-header dropdown">
                <button class="navbar-toggler navbar-toggler-right m-2 Bar-cloud ml-xs-0 hidden-lg-up" type="button"
                        data-toggle="dropdown"
                        id="navbarDropdownMenuLink" data-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fa fa-bars " aria-hidden="true"></i>
                </button>

                <ul class="nav nav-pills">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                    <li class="nav-item">
                        <a class="nav-link text-white  active" href="/home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                            MySurvey
                        </a>
                    </li>


                </ul>

                <div class="dropdown-menu dropdown-menu-right p-0 m-2" aria-labelledby="navbarDropdownMenuLink">
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Empatica</a>
                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Challenges</a>
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Rank</a>
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Profile</a>
                        <i class="fa fa-user " aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"><a
                                class="mr-auto">Sign Out</a>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </button>


                </div>
            </div>
        </div>
        <!-- only visible in md sreen-->
        <div id="md_nav" class="container hidden-sm-down hidden-lg-up ">
            <div class="navbar-header dropdown">
                <button class="navbar-toggler navbar-toggler-right m-2 Bar-cloud ml-xs-0 hidden-lg-up" type="button"
                        data-toggle="dropdown"
                        id="navbarDropdownMenuLink" data-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fa fa-bars " aria-hidden="true"></i>
                </button>

                <ul class="nav nav-pills">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                    <li class="nav-item">
                        <a class="nav-link text-white  active" href="/home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                            MySurvey
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            Empatica
                        </a>
                    </li>


                </ul>

                <div class="dropdown-menu dropdown-menu-right p-0 m-2" aria-labelledby="navbarDropdownMenuLink">

                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Challenges</a>
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Rank</a>
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#">
                        <a class="mr-auto">Profile</a>
                        <i class="fa fa-user " aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"><a
                                class="mr-auto">Sign Out</a>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </button>
                </div>
            </div>
        </div>
        <!-- only visible in lg sreen-->
        <div id="lg_nav" class="container hidden-md-down ">
            <div class="navbar-header dropdown">
                <a class="navbar-toggler navbar-toggler-right m-2 Bar-cloud hidden-md-down border-0" data-toggle="dropdown"
                   id="navbarDropdownMenuLink2" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                   aria-label="Toggle navigation">
                    <img src="/img/efrem.jpg " class="rounded" width="20" height="20">
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>

                <ul class="nav nav-pills">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                    <li class="nav-item">
                        <a class="nav-link text-white  start" href="/home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                            MySurvey
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            Empatica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-certificate" aria-hidden="true"></i>
                            Challenges
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="/mysurvey">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Rank
                        </a>
                    </li>

                </ul>
                <div class="dropdown-menu dropdown-menu-right  p-0 m-2 hidden-sm-down"
                     aria-labelledby="navbarDropdownMenuLink2">

                    <li class="dropdown-item list-group-item border-0 pt-2 pb-2">
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-center">
                                        <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-left"><strong>Efrem Gebremedhin</strong></p>
                                    <p class="text-left small">effer.vision@gmail.com</p>
                                    <p class="text-left">
                                        <a href="#" class="btn btn-success btn-block btn-sm"
                                           style="background-color:$emerald">Change Profile Picture</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">Account
                            Settings </a>
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>

                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">User
                            stats</a>
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-divider"></div>

                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">Messages </a>
                        <span class="badge badge-default badge-pill"> 42 </span>
                    </button>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"><a
                                class="mr-auto">Sign Out</a>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </button>
                </div>
            </div>
        </div>
    </nav>

<div class="jumbotron mb-0">
    @yield('content')
</div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
