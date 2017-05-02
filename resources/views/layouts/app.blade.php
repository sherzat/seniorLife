<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SeniorLife') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <script>
        $(function () {
            $("a").on("click",function () {
                $("a.active").removeClass("active");
                $(this).addClass("active");
            })
        });
    </script>
</head>
<body>

<!-- background-img class is found in app.scss file -->
<div class="container-fluid">
    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <!-- vertical-align is used to center vertically even for unknown height or different screen size -->
    <div class="row row-nav">
        <nav class="navbar navbar-inverse navbar-fixed-top nav-customize hidden-xs">
            <div class="container">
                <div class="navbar-header dropdown">
                    <a class="navbar-toggle dropdown-toggle clearing-border-and-adding-color" data-toggle="dropdown"
                       data-target=".pull-right">

                        <img src="/img/empatica.svg" class="img-circle" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>

                </div>

                <div class="navbar-header pull-right">

                    <a class="adding-anchor-marigin-top dropdown-toggle hidden-xs" data-toggle="dropdown">
                        <img src="/img/empatica.svg" class="img-circle special-img" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="nav navbar-nav nav-pills making-hemberger-center">
                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#" class="active custom-style-for-xs-screen">
                                MySurvey
                            </a>
                        </li>

                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#">
                                Empatica
                            </a>
                        </li>

                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#">
                                Challenges
                            </a>
                        </li>

                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#">
                                MySurvey
                            </a>
                        </li>

                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#">
                                Rank
                            </a>
                        </li>
                    </ul>
                    <ul class="dropdown-menu pull-right nav">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Efrem Gebremedhin</strong></p>
                                        <p class="text-left small">effer.vision@gmail.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-success btn-block btn-sm"
                                               style="background-color:$emerald">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider navbar-login-session-bg"></li>
                        <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">Favourites Snippets <span
                                        class="glyphicon glyphicon-heart pull-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
@yield("content")
    </div>

    <nav class="navbar navbar-fixed-top visible-xs nav-customize">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<!-- hemberger-custom-setting is used to change background color -->
                    <span class="icon-bar hemberger-custom-settings"></span>
                    <span class="icon-bar hemberger-custom-settings"></span>
                    <span class="icon-bar hemberger-custom-settings"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                <div class="container navbar-more pull-right visible-xs">
                    <ul class="nav navbar-nav making-hemberger-center nav-pills">
                        <li>
                            <!-- custom-style-for-xs-screen is used to change color -->
                            <a href="#" class="active custom-style-for-xs-screen">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                MySurvey
                            </a>
                        </li>

                        <li>
                            <a href="#" class="custom-style-for-xs-screen">
                                <span class="glyphicon glyphicon-envelope"></span>
                                Empatica
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="background-color: white">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>

</body>
</html>