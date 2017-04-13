@extends('layouts.app')

@section('content')

<div class="col-md-10">
    <div class="row">
        progress bar
    </div>
    <div class="row">
        questions
    </div>

    <div class="row">
        answers
    </div>
</div>
<div class="col-md-2">
    <div class="row side-menu">
        Self-assesment
    </div>
    <div class="row side-menu">
        Wristband
    </div>
</div>
<ul class="collection with-header">
    <li class="collection-header">
        <h2 class="flow-text">Recent Surveys
            <span style="float:right;">
					<a href='{{route('new.survey')}}'>Create new</a>
            </span>
        </h2>
    </li>
    @forelse ($surveys as $survey)
      <li class="collection-item">
        <div>
            {{ link_to_route('detail.survey', $survey->name, $survey)}}
            <a href="survey/{{ $survey->id }}" title="Edit Survey" class="secondary-content"><i class="material-icons">view</i></a>
        </div>
        </li>
    @empty
        <p class="flow-text center-align">Nothing to show</p>
    @endforelse
    </ul>
{!! Form::close() !!}
@endsection
