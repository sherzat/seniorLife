<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SeniorLife') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">


    <!-- Scripts -->
    <script>

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

            function getclicked(id) {
            if (id == "button1") {
                document.getElementById('button1').style.backgroundColor = "#FF9800";
                document.getElementById('button2').style.backgroundColor = "#009688";
                document.getElementById('button3').style.backgroundColor = "#009688";
                document.getElementById('button4').style.backgroundColor = "#009688";
            }else if(id == "button2"){
                document.getElementById('button1').style.backgroundColor = "#009688";
                document.getElementById('button2').style.backgroundColor = "#FF9800";
                document.getElementById('button3').style.backgroundColor = "#009688";
                document.getElementById('button4').style.backgroundColor = "#009688";
            }else if(id == "button3"){
                document.getElementById('button1').style.backgroundColor = "#009688";
                document.getElementById('button2').style.backgroundColor = "#009688";
                document.getElementById('button3').style.backgroundColor = "#FF9800";
                document.getElementById('button4').style.backgroundColor = "#009688";
            }else if(id == "button4"){
                document.getElementById('button1').style.backgroundColor = "#009688";
                document.getElementById('button2').style.backgroundColor = "#009688";
                document.getElementById('button3').style.backgroundColor = "#009688";
                document.getElementById('button4').style.backgroundColor = "#FF9800";
            }else{

            }
        }


    </script>

</head>

<body>
<div class="nav-header-setting">
    <nav class="nav-header-setting navbar navbar-inverse">


        <div class="header-height navbar-header ">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        @if (Auth::guest())
        @else
            <ul class="header-height nav navbar-nav">
                <li class ="header-height"><a href="/">Feedback</a></li>
                <li class = "header-height"><a href="/self_assessment">Self-assessment</a></li>
                <li class="header-height"><a href="/about">Challenges</a></li>
                <li class="header-height"><a href="/">Quality Of Life</a></li>

                <li class="dropdown logout-width-setting">
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
        @if (Auth::guest())
            <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
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
            </ul>
    </nav>
    @endif
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
    <footer class="footerClass">
        <ul class="footer-height footer-setting ">
            <li class ="footer-height"><a href="/" class="anchor-setting">Level 1</a></li>
            <li class = "footer-height"><a href="/" class="anchor-setting">Start</a></li>
        </ul>
    </footer>
@endif

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
