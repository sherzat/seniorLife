@extends('layouts.app')

@section('content')
    <style>
label {
  display: inline-block;
    padding-left: 1.5em;
  position: relative;
    cursor: pointer;
  
}
input[type="checkbox"] {
  opacity: 0;
    width: 40px;
  height: 40px;
  }
input[type="checkbox"]:checked ~ label svg path {
  stroke-dashoffset: 0;
  }
  input[type="checkbox"]:checked ~ label {
    color: orange;
  text-decoration: line-through;
  }


    </style>
    <div id="survey"></div>
@endsection
