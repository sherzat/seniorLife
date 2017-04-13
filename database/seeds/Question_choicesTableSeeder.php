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
        //
		$questions = factory(App\Question::class)
			->create()
			->where('id', '<', 50)
			->each(function($question) {
					$question->choices()->save(factory(App\Choice::class)->make());
			});

		/*
		$question = DB::table('questions')->where('id','<',50)
            ->orderBy('id')
            ->get();

        foreach ($question as $q)
        {
            $q->choices()->attach([1,2,3,4,5]);
        }

        $question = DB::table('questions')->where('id',50)->first();
        $question->choices()->attach([6,7]);

        $question = DB::table('questions')->where('id',51)->first();
        $question->choices()->attach([8,9,10]);

        $question = DB::table('questions')->where('id',52)->first();
        $question->choices()->attach([11,12,13,14,15]);

        $question = DB::table('questions')->where('id',53)->first();
        $question->choices()->attach([16,17]);

        $question = DB::table('questions')->where('id',54)->first();
		$question->choices()->attach([18,19,20]);

		 */
    }
}
