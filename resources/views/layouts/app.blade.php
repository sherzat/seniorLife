
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/graceage.css" rel="stylesheet">
    <link href="/node_modules/font-awesome-4.7.0/scss/font-awesome.scss" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div class="container">
    <nav class="navSettings">

        <div class="container-fluid settings-for-container">

            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

           <div class="collapse navbar-collapse settings-for-container" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
              {{-- <ul>
                    &nbsp;
               </ul>--}}

                @if (Auth::guest())
                @else
                    <ul>
                        <li><a href="/">Feedback</a></li>
                        <li><a href="/self_assessment">Self-assessment</a></li>
                        <li><a href="/about">Challenges</a></li>
                        <li><a href="/">Quality Of Life</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
                                <img src="img/Pressure_64.png" class="img-circle special-img"> {{ Auth::user()->name }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Sign-out</a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                 @endif

            <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <form class="navbar-form navbar-left signin_form_width" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="username" class="signin_input"  name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" placeholder="Password" type="password" class="signin_input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
                                @endif
                            </div>

                            <div class="form-group ">
                                <button class="btn btn-default signin_button" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    @endif
                </ul>
            </div>
        </div>

    </nav>
</div>
    @yield('content')



@if (Auth::guest())

    <div class="subSection">
        <div class="col-sm-4">
            <div id="content">
                <img src="img/Share-64.png" class="img_class_login" alt=""/>
                <h1>Share</h1>
                <p>Share your experience with friends and family's. And Let them know you are doing great</p>
            </div>

        </div>
        <div class="col-sm-4">
            <div id="content">
                <img src="img/Pressure_64.png" class="img_class_login" alt=""/>
                <h1>Blood Pressure</h1>
                <p> Measure your blood and get to know your self every day for better health </p>

            </div>
        </div>
        <div class="col-sm-4">

            <div id="content">
                <img src="img/Survey-64.png" class="img_class_login" alt=""/>
                <h1>Survey</h1>
                <p>By filling our survey you will know your quality of life and we will help you for better
                    achievement </p>
            </div>
        </div>

    </div>
@else
{{-- <footer class="footerClass">
--}}{{--     <div class="container">
            <div class="row">
                <div class="col-sm-4 footerClass">footer 1</div>
                <div class="col-sm-4 footerClass" style="margin-left: 5px;">footer 2</div>
                <div class="col-sm-4 footerClass" style="margin-left: 5px">footer 3</div>
            </div>
        </div>--}}{{--
    </footer>--}}
    @endif


    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
