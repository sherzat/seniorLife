@extends('pages.self_assessment')

@section('form')
	{!! Form::open(['route' => 'self_assessment.store']) !!}
		{{Form::radio('name', 'value')}}
	{!! Form::close() !!}
@endsection