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
<div class="container-fluid background-img">
    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <div class="row registor">
        <div class="col-xs-12 col-sm-12 visible-xs visible-sm">

        </div>

        <div class="col-md-12">
            <!-- nav-color-and-height used to customize nav bar -->
            <nav class="navbar navbar-inverse navbar-fixed-top nav-customize">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>


                    </div><!--/.nav-collapse -->

                    <!-- Authentication Links -->

                </div>

            </nav>
        </div>
        @yield('content')

    </div>

</div>

<script src="/js/app.js"></script>
</body>
</html>