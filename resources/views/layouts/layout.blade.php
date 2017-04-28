<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SeniorLife') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- background-img class is found in app.scss file -->
<div class="container-fluid background-img">
    <!-- registor class is inside apps.scss file used to set the height and width of row to inherent from its parent -->
    <!-- vertical-align is used to center vertically even for unknown height or different screen size -->
    <div class="row registor vertical-align">

<!-- This is visible only in extra small devices -->
        <div class="col-xs-8 col-xs-offset-2 visible-xs">
            <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/login')}}">
                {{ csrf_field() }}
                <!-- font family and font size -->

     <!-- email form starts here -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!-- the default color is changed and it is found in apps.scss -->
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input id="email" type="email" placeholder="Username" class="form-control settins-for-paragraphs"
                               name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))

                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                        @endif
                    </div>
                </div>

    <!-- password form starts here -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input id="password" placeholder="Password" type="password" class="form-control settins-for-paragraphs" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

    <!-- sign in button -->
                    <!-- setting-for-paragraphs are used to change the size and font while background color changes the background color -->
                    <!-- both are found in apps.scss -->
                <button type="submit" class="btn btn-success form-control settins-for-paragraphs lead signin-background-color lead">Sign In</button>
            </form>
            <div class="form-group">
                <h5 class="setting-for-registration-text">New to SeniorLife? Please register here!</h5>
                <!-- setting-for-registration-button is found in apps.scss file -->
                <button type="submit" class="btn btn-success form-control setting-for-registration-button lead">Sign Up Now</button>
            </div>
        </div>
<!-- Extra small device ends here -->

        <div class="col-md-12">
<!-- nav-color-and-height used to customize nav bar -->
            <nav class="navbar navbar-inverse navbar-fixed-top nav-customize">
                <div class="container">
                    <div class="navbar-header">
                        {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>--}}
                        <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
                    </div>

                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav hidden-sm">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>

                        <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/login')}}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="Username"  class="input-xs form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))

                                    <span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
                                @endif

                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" placeholder="Password" type="password" class="input-xs form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success settins-for-paragraphs lead signin-background-color lead">Sign In</button>
                        </form>
                    </div><!--/.nav-collapse -->

                </div>

            </nav>
<!-- welcome text and register botton are added here for tablets and desktops -->
            <div class="container">
                <div class="col-xs-8 col-xs-offset-2 hidden-xs">
                    @yield('content_registor')
                </div>
            </div>
        </div>
    </div>

    <!-- intro class is found in app.scss -->
    <!-- Example row of columns -->
    <div class="row" style="background-color: #16a085">
        <!-- style-for-images is found in _home_footor_settings and is used to add vertical lines -->
        <div class="col-md-4 style-for-images">
            <div class="card">
                <div class="card-block">
                    <fieldset>
                        <!-- title-settings is found in _home_footor_settings and is used to customize the titles "share" -->
                        <h2 class="card-title title-settings">Share</h2>
                        <img class="card-img-top img-responsive" src="img/Share.png" width="150" height="150" align="left"/>

                        <!-- settings-for-paragraphs are found in _home_footor_settings -->
                        <p class="card-text settins-for-paragraphs lead">By sharing your activities, You can let your
                            friends and families
                            know about your health in general. You can share your survey results, Empatica results,
                            your rank and how many badges you collect and more. </p>
                        <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="col-md-4 style-for-images">
            <div class="card">
                <div class="card-block">
                    <fieldset>
                        <h2 class="card-title title-settings">Empatica</h2>
                        <img class="card-img-top img-responsive" src="img/Empatica.png" width="150" height="150"
                             align="left"/>
                        <p class="card-text settins-for-paragraphs lead">Empatica is a wristband a wearable wireless
                            device designed for continuous, real-time data acquisition in daily life. Using your
                            Empatica you can monitor seizures, sleep, and physical activity. </p>
                        <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="col-md-4 style-for-images">
            <div class="card">
                <div class="card-block">
                    <fieldset>
                        <h2 class="card-title title-settings">Survey</h2>
                        <img class="card-img-top img-responsive" src="img/Survey.png" alt="" width="150" height="150"
                             align="left"/>
                        <p class="card-text settins-for-paragraphs lead">In Survey part, you will find different
                            categories and
                            questions inside them. These questions are used to investigate
                            your characteristics, behaviors, or opinions regarding different things. </p>
                        <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>