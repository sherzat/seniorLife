@extends('layouts.app')

@section('content')
@foreach($survey->questions as $question)
<h2>
{{$question->question}}
</h2>
<div>

	{{ $survey->responses->where('question_id', '=',$question->id)->where('user_id', Auth::id())->first()->choices->choice }}
	
</div>
@endforeach
@endsection
