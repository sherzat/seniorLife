@extends('layouts.app')

@section('content')
{!! Form::open(['route' => ['store.survey', $survey]]) !!}
@foreach($survey->questions as $question)
<h2> 
{{$question->question}}
</h2>
<div>
	@foreach($question->choices as $choice)
		{!! Form::radio($question->id, $choice->choice, false) !!}
		{{$choice->choice}}
	@endforeach
</div>

@endforeach
{!! Form::submit('Submit') !!}
{!! Form::close() !!}
@endsection
