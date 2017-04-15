@extends('layouts.app')

@section('content')
   <div class="container-fluid homeImage">

       <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
                <div class="title">
                    <h1>Monitor Your Health For Better Quality of Life</h1>
                </div>
            </div>
       </div>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4" style="text-align: center;">

                <button type="button" class="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="padding-bottom: 0px;">

                    <h2>Sign up Now </h2>

                </button>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <img src="img/profile.png">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form-control input-registration-settings" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" class="form-control input-registration-settings" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control input-registration-settings" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">

                                <input id="password-confirm" type="password" class="form-control input-registration-settings" placeholder="Confirm password" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary submit-button">
                                    Register
                                </button>
                        </div>
                    </form>
            </div>
        </div>

    </div>

@endsection
