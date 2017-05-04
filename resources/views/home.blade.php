@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">

        <div class="container">
            <h1> What you need to know </h1>
            <p>Make daily self-assessment for better quality of life!</p>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <!-- Heading -->
                        <div class="card-block mx-auto">
                            <h4 class="card-title">Your Quality of Life</h4>
                            <h6 class="card-subtitle text-muted">Overall score of your last survey</h6>
                        </div>

                        <!-- Image -->
                        <div class="card-block" style="text-align: center">
                            <div id="circular_progress_bar">
                            </div>
                        </div>
                        <!-- Text Content -->
                        <div class="card-block  mx-auto">
                            <p class="card-text">You have completed 10 surveys this week</p>
                        </div>
                        <div class="card-block mx-auto">
                            <button class="btn btn-success">Start New Survey</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Health Card</h4>
                            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
                        </div>

                        <!-- Image -->
                        <img src="/img/empatica_icon.png" alt="Photo of sunset">

                        <!-- Text Content -->
                        <div class="card-block">
                            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be
                                gone for good!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Your achevemnts</h4>
                            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
                        </div>

                        <!-- Image -->
                        <img src="/img/empatica_icon.png" alt="Photo of sunset">

                        <!-- Text Content -->
                        <div class="card-block">
                            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be
                                gone for good!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">To day's Challenges</h4>
                            <h6 class="card-subtitle text-muted">Sun disappears!</h6>
                        </div>

                        <!-- Image -->
                        <img src="/img/empatica_icon.png" alt="Photo of sunset">

                        <!-- Text Content -->
                        <div class="card-block">
                            <p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be
                                gone for good!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myCarousel" class="carousel fixed-bottom slide bg-inverse" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid ml-auto mr-auto" src="/img/Empatica.png"
                         alt="First slide">
                    <div class="carousel-caption mb-0">
                        <h3>First slide</h3>
                        <p>This is the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid ml-auto mr-auto" src="/img/Empatica.png" alt="Second slide">
                    <div class="carousel-caption mb-0">
                        <h3>Second slide</h3>
                        <p>This is the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid ml-auto mr-auto" src="/img/Empatica.png" alt="Third slide">
                    <div  class="carousel-caption mb-0">
                        <h3>Third slide</h3>
                        <p>This is the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection