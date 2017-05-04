<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/new_app.css">
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md bg-nav">
      <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="fa fa-bars"></div>
      </button>
      <a class="navbar-brand" href="#">{{ config('app.name', 'SeniorLife') }}</a>
      <a class="navbar-brand hidden-lg-up" href="#">
         {{Route::currentRouteName()}}
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="/home">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  Home
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/mysurvey">
                  <i class="fa fa-wpforms" aria-hidden="true"></i>
                  MySurvey
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/empatica">
                  <i class="fa fa-heartbeat" aria-hidden="true"></i>
                  Empatica
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="/challenges">
                  <i class="fa fa-certificate" aria-hidden="true"></i>
                  Challenges
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="/rank">
                  <i class="fa fa-trophy" aria-hidden="true"></i>
                  Rank
              </a>
          </li>
        </ul>

      </div>
    </div>
    </nav>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
