@extends('layouts.auth_layout')

@section('regiser_content')
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
                <input id="name" type="text" class="form-control input-group-sm input-registration-settings" placeholder="User name" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                @endif

            </div>
        </div>

        <!-- email form -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!-- the default color is changed and it is found in apps.scss -->
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-envelope"></span>
                </div>
                <input id="email" type="email" placeholder="Email" class="form-control input-registration-settings"
                       name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))

                    <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                @endif
            </div>
        </div>
        <!-- password   form -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                <input id="password" placeholder="Password" type="password" class="form-control input-registration-settings" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                @endif
            </div>
        </div>
        <!-- Confirm password -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control input-registration-settings" name="password-confirmation" required>
            </div>
        </div>
        <!-- submit button -->
        <div class="form-group">
            <button type="submit" class="btn btn-success form-control setting-for-registration-button lead">Register</button>
        </div>
    </form>
@endsection
@section('regiser_content_md')
    <div class="modal-content">
        <img src="img/profile-orange.png">
        <form class="form-horizontal" role="form" method="POST">
        {{ csrf_field() }}

        <!-- user name form -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} customizing-form-horizontal">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                    <input id="name" type="text" class="form-control input-group-sm input-registration-settings" placeholder="User name" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                    @endif

                </div>

            </div>

            <!-- email form -->
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} customizing-form-horizontal">
                <!-- the default color is changed and it is found in apps.scss -->
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input id="email" type="email" placeholder="Email" class="form-control input-registration-settings"
                           name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))

                        <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                    @endif
                </div>
            </div>

            <!-- password   form -->
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} customizing-form-horizontal">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input id="password" placeholder="Password" type="password" class="form-control input-registration-settings" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <!-- Confirm password -->
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} customizing-form-horizontal">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control input-registration-settings" name="password-confirmation" required>
                </div>
            </div>

            <!-- submit button -->
            <div class="form-group customizing-form-horizontal">
                <button type="submit" class="btn btn-success form-control setting-for-registration-button lead">Register</button>
            </div>
        </form>
    </div>
@endsection