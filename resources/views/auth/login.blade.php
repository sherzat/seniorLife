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
                <form>
                    <div class="form-input">
                        <input class="input-registration-settings" type="username" placeholder="User Name" name="username" style="margin-top: 40px;">

                    </div>

                    <div class="form-input">
                        <input class="input-registration-settings" type="email" placeholder="Email" name="email">
                    </div>

                    <div class="form-input">
                        <input class="input-registration-settings" type="password" placeholder="Password" name="password">
                    </div>

                    <div class="form-input">
                        <input class="input-registration-settings" type="password" placeholder="Confirm password" name="confirm-password">
                    </div>

                    <div class="form-input ">
                        <button class=" btn btn-default submit-button" type="submit" name="Register">Register</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

@endsection
