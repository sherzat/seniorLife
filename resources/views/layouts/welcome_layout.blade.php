<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Avatar and Gamification </title>

    <!-- Bootstrap 4 core CSS -->
    <!-- Custom styles for this template -->
    <link href="/css/new_app.css" rel="stylesheet">


</head>
<body>

<div class="container-fluid  background-img w-100 h-100 Rail-way-font">

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top Nav-bg-color">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand Title-light Lato-font" href="#">{{ config('app.name', 'SeniorLife') }}</a>

            </div>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">

                </ul>
                <form class="navbar-form form-inline my-2 my-lg-0" role="form" method="POST"
                      action="{{ url('/login')}}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mr-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <input id="email" type="email" placeholder="Email"
                                   class="input-xs form-control Rail-way-font"
                                   name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                    </div>
                    <!-- password form -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mr-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </div>
                            <input id="password" placeholder="Password" type="password"
                                   class="input-xs form-control Rail-way-font" name="password" required>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success Rail-way-font" data-step="1"
                            data-intro="Get it, use it.">Sign In
                    </button>

                </form>


            </div>
        </div>
    </nav>

    @yield('content')

</div>

@yield('footer')



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="/js/app.js"></script>

</body>
</html>
