<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SeniorLife') }}</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<!-- background-img class is found in app.scss file -->
<div class="container-fluid">
    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <!-- vertical-align is used to center vertically even for unknown height or different screen size -->
    <div class="row row-nav">
        <nav class="navbar navbar-inverse navbar-fixed-top nav-customize">
            <div class="container">
                <div class="navbar-header dropdown">
                    <a class="navbar-toggle dropdown-toggle clearing-border-and-adding-color" data-toggle="dropdown"
                       data-target=".pull-right">

                        <img src="/img/efrem.jpg" class="img-circle" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>

                </div>

                <div class="navbar-header pull-right">

                    <a class="adding-anchor-marigin-top dropdown-toggle hidden-xs" data-toggle="dropdown">
                        <img src="/img/efrem.jpg" class="img-circle special-img" width="15" height="15">
                        <strong style="color: #ecf0f1">{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
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

    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>