@extends('layouts.auth_layout')

@section('login_content')
    <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/login')}}">
    {{ csrf_field() }}
    <!-- email form starts here -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!-- the default color is changed and it is found in apps.scss -->
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                <input id="email" type="email" placeholder="Email" class="form-control settins-for-paragraphs"
                       name="email" value="{{ old('email') }}" required autofocus>
            </div>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <!-- password form starts here -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                <input id="password" placeholder="Password" type="password" class="form-control settins-for-paragraphs" name="password" required>
            </div>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <!-- sign in button -->
        <!-- setting-for-paragraphs are used to change the size and font while background color changes the background color -->
        <!-- both are found in apps.scss -->
        <button type="submit" class="btn btn-success form-control settins-for-paragraphs lead signin-background-color lead">Sign In</button>
    </form>
@endsection

@section('login_content_md')
    <div class="modal-content">
        <img src="img/Lock.png">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login')}}">
        {{ csrf_field() }}
        <!-- email form -->
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} customizing-form-horizontal">
                <!-- the default color is changed and it is found in apps.scss -->
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input id="email" type="email" placeholder="Email" class="form-control input-registration-settings"
                           name="email" value="{{ old('email') }}" required autofocus>

                </div>
                @if ($errors->has('email'))

                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <!-- password   form -->
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} customizing-form-horizontal">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input id="password" placeholder="Password" type="password" class="form-control input-registration-settings" name="password" required>

                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <!-- submit button -->
            <div class="form-group customizing-form-horizontal">
                <button type="submit" class="btn btn-success form-control setting-for-registration-button lead">Sign In</button>
            </div>
        </form>
    </div>
@endsection