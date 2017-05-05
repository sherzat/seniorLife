<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/new_app.css">
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-nav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="fa fa-bars"></div>
        </button>
        <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
        <a class="nav-active-menu-sm hidden-lg-up" href="#">
          {{Route::currentRouteName()}}
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  {{ ends_with(Request::url(), 'home') ? "active" : "" }}">
              <a class="nav-link" href="home">
                <i class="fa fa-home" aria-hidden="true"></i>
                Home
              </a>
            </li>
            <li class="nav-item {{ ends_with(Request::url(), 'mysurvey') ? "active" : "" }}">
              <a class="nav-link " href="mysurvey">
                <i class="fa fa-wpforms" aria-hidden="true"></i>
                MySurvey
              </a>
            </li>
            <li class="nav-item {{ ends_with(Request::url(), 'empatica') ? "active" : "" }}">
              <a class="nav-link " href="empatica">
                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                Empatica
              </a>
            </li>
            <li class="nav-item {{ ends_with(Request::url(), 'challenges') ? "active" : "" }}">
              <a class="nav-link " href="challenges">
                <i class="fa fa-certificate" aria-hidden="true"></i>
                Challenges
              </a>
            </li>
            <li class="nav-item {{ ends_with(Request::url(), 'rank') ? "active" : "" }}">
              <a class="nav-link " href="rank">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                Rank
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

@yield('content')
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/js/app.js"></script>
  </body>
</html>
