@extends('layouts.app')

@section('content')

    <div class="jumbotron mt-4">
        <div class="card  ">
            <dvi class="row">
                <div class="col-md-4 col-sm-3">
                    <div class="card-block text-center">
                        <img class="card-img-top img-fluid img-responsive" src="/img/avatars/child-women-avatar.png"
                             alt="Card image cap">
                        <p class="card-text">Today's Challenge</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9">
                    <div class="card-block">
                        <h3 class="card-title Lato-font">Fill in One survey from nutrition category</h3>
                        <div class=" ">
                            <dl class="row Rail-way-font">
                                <dt class="col-sm-5 col-lg-3">Time it takes:</dt>
                                <dd class="col-sm-7 col-lg-9">3 minutes only </dd>

                                <dt class="col-sm-5 col-lg-3">You will get:</dt>
                                <dd class="col-sm-7 col-lg-9">10 points</dd>

                                <div class="col-sm-5 col-lg-5">
                                    <button class="btn btn-success mt-2 mb-0">Start the Challenge</button>
                                </div>

                            </dl>
                        </div>
                    </div>
                </div>
            </dvi>
        </div>


    </div>

@endsection