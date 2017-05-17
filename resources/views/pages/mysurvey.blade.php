@extends('layouts.new_app')
@section('content')

  <a class="MyAvatar "  href="javascript:void(0);" onclick="startIntro('mysurvey_clicked');"><img src={{ Auth::user()->avatar }} class="rounded" width="70" height="70"/></a>

  <div id="mysurvey_page"></div>

@endsection
