<?php

use Illuminate\Database\Seeder;

use App\Question;
use Illuminate\Database\Eloquent\Model;
class Question_choicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		    $questions = DB::table('questions')->where('category','=',1)->get();

        $questions->each(function($question){
          DB::table('question_choices')->insert([
            ["choice_id"=>1, 'question_id'=>$question->id],
            ["choice_id"=>2, 'question_id'=>$question->id],
            ["choice_id"=>3, 'question_id'=>$question->id],
            ["choice_id"=>4, 'question_id'=>$question->id],
            ["choice_id"=>5, 'question_id'=>$question->id],
          ]);
        });

    }
}
