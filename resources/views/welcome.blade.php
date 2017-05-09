@extends('layouts.layout')

@section('content')

    <div class="form-group">
        <!-- title custmize the font and color text found in apps.scss-->
        <h4 class="lead title">Monitor Your Health For Better Quality of Life</h4>
        <button type="button"
                class="btn btn-success btn-lg vertical-align settins-for-paragraphs lead registor-button-settings"
                data-toggle="modal" data-target="#myModal">
            Sign Up Now
        </button>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <img src="img/profile-orange.png">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <!-- user name form -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} customizing-form-horizontal">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input id="name" type="text" class="form-control input-group-sm input-registration-settings"
                               placeholder="User name" name="name" value="{{ old('name') }}" required autofocus>

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
                        <input id="email" type="email" placeholder="Email"
                               class="form-control input-registration-settings"
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
                        <input id="password" placeholder="Password" type="password"
                               class="form-control input-registration-settings" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Confirm password -->
                <div class="form-group customizing-form-horizontal">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input id="password-confirm" placeholder="Confirm password" type="password"
                               class="form-control input-registration-settings" name="password_confirmation" required>
                    </div>
                </div>

                <!-- submit button -->
                <div class="form-group customizing-form-horizontal">
                    <button type="submit"
                            class="btn btn-success form-control setting-for-registration-button settins-for-paragraphs lead">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

