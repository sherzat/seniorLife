<?php

use Illuminate\Database\Seeder;

class Survey_questionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<11;$i++){
        $questions = DB::table('questions')->where('category_id','=',$i+1)->get();
        $questions->each(function($question) use ($i){
            DB::table('survey_question')->insert([
                ["survey_id"=>$i+1, 'question_id'=>$question->id],
            ]);
        });
      }
    }
}
