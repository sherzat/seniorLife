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
                    <th colspan="4">Responses(answer, time, correct/Incorrect)</th>


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
                        <td>
                        @foreach (unserialize($testResponse->responses) as $key => $value)

                                {{ $value["c_id"] -10 }}
                                {{-- @if (unserialize($testResponse->responses)[]$value['secondsElapsed'])

                                @endif --}}
                                {{ $value['secondsElapsed'] }} s
                                @if ($value['c_id']+64 == $testResponse->question_id)
                                    Correct
                                @else
                                    Incorrect
                                @endif

                        @endforeach
                        </td>
                    </tr>

                @endforeach


            </tbody>
        </table>

    </div>

    {{ $testResponses->links() }}

@endsection
