@extends('layouts.app')
@section('content')

  {{$(".card-wrapper").on('click', function(event) {
     alert('You clicked the Bootstrap Card');
});}}
  <div class="container">
<div class="row">
    <div class="col-md-12 col-xs-12 card-wrapper">
      <div class="card">
        <div class="row ">
          <div class="col-md-4 ">
            <div class="card-block ">
              <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
              <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ea commodo consequat. </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
          <div class="col-md-8">
            <img src="http://www.codesyne.com/imgs/placeholder.png" class="w-100">
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
</div>
@endsection
