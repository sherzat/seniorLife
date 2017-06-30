@extends('layouts.new_app')
@section('content')

    <a id="step5" class="MyAvatar "  href="javascript:void(0);" onclick="startIntro('home_clicked');"><img src={{ Auth::user()->avatar }} class="rounded" width="70" height="70"/></a>
    <div class="Welcome"></div>

<div id="home_page"></div>
@endsection
