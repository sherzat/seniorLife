<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'SeniorLife') }}</title>
    <link href="/css/app_bootstrap4.css" rel="stylesheet">

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
    <nav class="navbar navbar-light Inlining-listing bg-faded nav-customize dropdown">

        <button class="navbar-toggler navbar-toggler-right m-2 Bar-cloud hidden-lg-up" type="button" data-toggle="dropdown"
                id="navbarDropdownMenuLink" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars " aria-hidden="true"></i>
        </button>

        {{--<a class="navbar-toggle dropdown-toggle clearing-border-and-adding-color" data-toggle="dropdown"
           data-target=".pull-right">
            <img src="/img/efrem.jpg" class="img-circle" width="15" height="15">
            <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
        </a>--}}

        <a class="navbar-toggler navbar-toggler-right m-2 Bar-cloud hidden-md-down"  data-toggle="dropdown"
                id="navbarDropdownMenuLink2" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="/img/efrem.jpg" class="img-circle" width="15" height="15">
            <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>

        <a class="navbar-brand hidden-xs-down" href="#">{{ config('app.name', 'SeniorLife') }}</a>

        <ul class="list-inline nav nav-pills float-xs-right align-items-start m-1 hidden-lg-up ">
            <li class="list-inline-item ">
                <a class="nav-link  text-white active pl-2 pr-2 customizing-width" href="/mysurvey">
                    <i class="fa fa-wpforms" aria-hidden="true"></i>
                    MySurvey
                </a>
            </li>
            <li class="list-inline-item ">
                <a class="nav-link pl-2 pr-2 text-white customizing-width" href="/empatica">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    Empatica
                </a>
            </li>
        </ul>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Edit</a>
            <a class="dropdown-item" href="#">Edit</a>
            <a class="dropdown-item" href="#">Edit</a>
        </div>

        <div class=" dropdown-menu dropdown-menu-right p-2 " aria-labelledby="navbarDropdownMenuLink2">

                <li class="">
                    <div class="navbar-login">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center">
                                    <i class="fa fa-user fa-5x"aria-hidden="true"></i>
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
            <ul class="list-group">

                <li class="list-group-item"><a href="#" class="mr-auto">Account Settings </a>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </li>

                <li class="list-group-item"><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>

                <li class="list-group-item"><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>

                <li class="list-group-item"><a href="#">Favourites Snippets <span
                                class="glyphicon glyphicon-heart pull-right"></span></a></li>

                <li class="list-group-item"><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        {{--<div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

        </div>--}}
    </nav>

    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <!-- vertical-align is used to center vertically even for unknown height or different screen size -->

  {{--      <nav class="navbar nav-customize">
                <div class="dropdown">
                    <a class="navbar-toggle dropdown-toggle clearing-border-and-adding-color" data-toggle="dropdown"
                       data-target=".pull-right">
                        <img src="/img/efrem.jpg" class="img-circle" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                    </a>

                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                </div>

              <div class="navbar-header pull-right">

                    <a class="adding-anchor-marigin-top dropdown-toggle hidden-xs" data-toggle="dropdown">
                        <img src="/img/efrem.jpg" class="img-circle special-img" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu float-{sm}-{right} nav">
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
        </nav>
    <nav class="navbar fixed-top visible-xs nav-customize">
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
                    <ul class="nav navbar-nav making-hemberger-center">
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
--}}

@yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>