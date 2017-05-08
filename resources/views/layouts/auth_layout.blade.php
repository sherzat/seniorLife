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
<div class="container-fluid {{Auth::guest() ? "background-img": ""}}">
    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <!-- vertical-align is used to center vertically even for unknown height or different screen size -->
    <div class="row registor vertical-align">
        <nav class="navbar navbar-inverse navbar-fixed-top nav-customize">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                </div>
            </div>
        </nav>
        <div class="col-xs-8 col-xs-offset-2 visible-xs">
            @yield('regiser_content')
            @yield('login_content')
        </div>
        <div class="col-xs-8 col-xs-offset-2 hidden-xs">
            @yield('regiser_content_md')
            @yield('login_content_md')
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>