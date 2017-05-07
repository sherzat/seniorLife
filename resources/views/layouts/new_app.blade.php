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

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-nav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="fa fa-bars"></div>
        </button>
        <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
        <a class="nav-active-menu-sm hidden-lg-up" href="#">
          {{Route::currentRouteName()}}
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
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
            <li class="nav-item {{ ends_with(Request::url(), 'rank') ? "active" : "" }} mr-auto">
              <a class="nav-link " href="rank">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                Rank
              </a>
            </li>
            <li class="nav-item {{ ends_with(Request::url(), 'achievement') ? "active" : "" }} mr-auto">
              <a class="nav-link " href="achievement">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                Achievement
              </a>
            </li>
            <li class="nav-item profile">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="/img/efrem.jpg " class="rounded" width="20" height="20">
                {{ title_case(Auth::user()->name )}} <b class="caret"></b></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item list-group-item border-0">
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
                                       style="background-color:$emerald">Profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">Account
                        Settings </a>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">User
                        stats</a>
                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item list-group-item border-0 pt-2 pb-2" href="#"><a class="mr-auto">Messages </a>
                    <span class="badge badge-default badge-pill"> 42 </span>
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item list-group-item border-0 pt-2 pb-2" href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                  <a class="mr-auto">Sign Out</a>
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                  </form>
                </a>
              </ul>
            </li>
          </ul>






          {{-- <a class="navbar-toggler navbar-toggler-right m-2 Bar-cloud hidden-md-down border-0" data-toggle="dropdown"
             id="navbarDropdownMenuLink2" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
             aria-label="Toggle navigation">
              <img src="/img/efrem.jpg " class="rounded" width="20" height="20">
              <i class="fa fa-caret-down" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right"
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
                                     style="background-color:$emerald">Profile</a>
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
          </div> --}}

        </div>
      </div>
    </nav>
    <div class="top-margin">
      <div class="jumbotron">
      @yield('content')
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/js/app.js"></script>
  </body>
</html>
