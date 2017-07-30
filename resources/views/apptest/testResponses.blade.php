@extends('layouts.apptest_layout')

@section('content')

    <div class="container">
         {{date('H:i:s')}}
        <table class="table">
            <thead>
                <tr>
                    <th>Response id</th>
                    <th>Participant id</th>
                    <th>Question id</th>
                    <th>With Next Btn</th>
                    <th>Likert scale type</th>
                    <th>Responses</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testResponses as $testResponse)
                    <tr>
                        <th>{{$testResponse->id}}</th>
                        <td>{{$testResponse->user_id}}</td>
                        <td>{{$testResponse->question_id}}</td>
                        <td>{{$testResponse->withNext}}</td>
                        <td>{{$testResponse->likertScale}}</td>
                        <td>{{var_dump( unserialize( $testResponse->responses))}}</td>
                    </tr>

                @endforeach


            </tbody>
        </table>

    </div>

    {{ $testResponses->links() }}

@endsection
