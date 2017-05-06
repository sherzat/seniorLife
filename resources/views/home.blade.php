@extends('layouts.app')

@section('content')



        <div class="container">
            <h1> What you need to know </h1>
            <p>Make daily self-assessment for better quality of life!</p>
        </div>

        <div class="container Rail-way-font">

            <div class="row my-flex-card">
                <div class="col-md-6">
                    <div class="card">
                        <!-- Heading -->
                        <div class="card-block pt-1 pb-2">
                            <h4 class="card-title">Your Quality of Life</h4>
                            <h6 class="card-subtitle">Overall score of your last survey</h6>
                        </div>
                        <!-- Image -->
                        <div class="card-block p-1" style="text-align: center">
                            <div id="circular_progress_bar">
                            </div>
                        </div>
                        <!-- Text Content -->
                        <div class="card-block p-1 mx-auto">
                            <p class="card-text">You have completed 10 surveys this week</p>
                        </div>
                        <!-- button -->
                        <div class="card-block p-1 pb-3 mx-auto">
                            <button class="btn btn-success">Read Detail >></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="card">
                        <!-- Heading -->
                        <div class="card-block pt-1 pb-2">
                            <h4 class="card-title">Health Card </h4>
                            <h6 class="card-subtitle text-muted">Real time data</h6>
                        </div>
                        <!-- Image -->
                        <div class="card-block p-1 mx-auto">
                            <i class="fa fa-spinner fa-3x fa-spin" aria-hidden="true"></i>
                        </div>
                        <!-- Text Content -->
                        <div class=" card-block p-1 mx-auto">
                            <p>Connect Your Device</p>
                        </div>
                        <!-- Text Content -->
                        <div class="card-block p-1 pb-3">
                            <div class="list-group list-group-flush">
                                <li class="list-group-item justify-content-between">
                                    <div class="" id="health_card">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        <span> Heart Rate </span>
                                    </div>
                                    <span> 42 </span>
                                </li>
                                <li class="list-group-item justify-content-between">
                                    <div class="" id="health_card"><i class="fa fa-smile-o" aria-hidden="true"></i></i>
                                        <span> Stress level</span>
                                    </div>
                                    <span>Normal</span>
                                </li>
                                <li class="list-group-item justify-content-between">
                                    <div class="" id="health_card">
                                        <i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
                                        <span>Temperature</span>
                                    </div>
                                    <span> 25 oC </span>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-flex-card">
                <!-- your achevments -->
                <div class="col-md-6">
                    <div class="card">
                        <!-- Heading -->
                        <div class="card-block pt-1 pb-2">
                            <h4 class="card-title">Your achevemnts</h4>
                            <h6 class="card-subtitle text-muted">Your collection</h6>
                        </div>
                        <!-- Image -->
                        <div class="card-block p-1">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item active">
                                        <div class="mx-auto">

                                            <img class="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                 src="/img/badges/first_survey.png" alt="First slide">
                                        </div>

                                    </div>


                                    <div class="carousel-item">
                                        <div class="mx-auto">
                                            <img class="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                 src="/img/badges/first_survey.png" alt="Second slide">

                                        </div>
                                    </div>


                                    <div class="carousel-item">
                                        <div class="mx-auto">
                                            <img class="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                 src="/img/badges/first_survey.png" alt="Third slide">

                                        </div>
                                    </div>

                                </div>

                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- Text Content -->
                        <div class="card-block p-1 mx-auto">
                            <p class="card-text">You can earn more badges by completing tasks</p>
                        </div>
                        <!-- button -->
                        <div class="card-block p-1 pb-3 mx-auto">
                            <button class="btn btn-success">See more achevement badges</button>
                        </div>
                    </div>
                </div>
                <!-- your progress -->
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="card">
                        <div class="card-block pt-1 pb-2">
                            <h4 class="card-title"> <h2>Level 1</h2></h4>

                        </div>
                        <!-- Image -->
                        <div class="card-block pb-0" id="home_progress_bar"></div>
                        <div class="card-block p-1 pb-3 mx-auto">
                            Get 70 more points to level up
                        </div>

                        <!-- Text Content -->
                        <div class="card-block p-1 mx-auto">
                            <p class="card-text">Hi! Do you like challenge, see our today's challenge for you.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-block p-1 pb-3 mx-auto">
                            <button class="btn btn-success">Go to challenges </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection