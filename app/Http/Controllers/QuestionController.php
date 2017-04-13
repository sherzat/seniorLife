<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use App\Question_choice;

use App\Question;

class QuestionController extends Controller
{
    public function mapQC()
    {
        echo 'herhe';
        $question = Question::where('id','<',50)
            ->orderBy('id')
            ->get();

        foreach ($question as $q)
        {
            $q->choices()->attach([1,2,3,4,5]);
        }

        $question = Question::find(50);
        $question->choices()->attach([6,7]);

        $question = Question::find(51);
        $question->choices()->attach([8,9,10]);

        $question = Question::find(52);
        $question->choices()->attach([11,12,13,14,15]);

        $question = Question::find(53);
        $question->choices()->attach([16,17]);

        $question = Question::find(54);
        $question->choices()->attach([18,19,20]);
    }
}
