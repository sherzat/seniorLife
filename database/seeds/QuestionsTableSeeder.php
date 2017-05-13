<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        ['question'=>"Do you read something and find you haven’t been thinking about it and must read it again?", 'category' => 1],
        ['question'=>"Do you find you forget why you went from one part of the house to the other?", 'category' => 1],
        ['question'=>"Do you fail to notice signposts on the road?", 'category' => 1],
        ['question'=>"Do you find you confuse right and left when giving directions?", 'category' => 1],
        ['question'=>"Do you bump into people?", 'category' => 1],
        ['question'=>"Do you find you forget whether you’ve turned off a light or a fire or locked the door?", 'category' => 1],
        ['question'=>"Do you fail to listen to people’s names when you are meeting them?", 'category' => 1],
        ['question'=>"Do you say something and realize afterwards that it might be taken as insulting?", 'category' => 1],
        ['question'=>"Do you fail to hear people speaking to you when you are doing something else?", 'category' => 1],
        ['question'=>"Do you lose your temper and regret it?", 'category' => 1],
        ['question'=>"Do you leave important letters unanswered for days?", 'category' => 1],
        ['question'=>"Do you find you forget which way to turn on a road you know well but rarely use?", 'category' => 1],
        ['question'=>"Do you fail to see what you want in a supermarket (although it’s there)?", 'category' => 1],
        ['question'=>"Do you find yourself suddenly wondering whether you’ve used a word correctly?", 'category' => 1],
        ['question'=>"Do you have trouble making up your mind?", 'category' => 1],
        ['question'=>"Do you find you forget appointments?", 'category' => 1],
        ['question'=>"Do you forget where you put something like a newspaper or a book?", 'category' => 1],
        ['question'=>"Do you find you accidentally throw away the thing you want and keep what you meant to throw away – as in the example of throwing away the matchbox and putting the used match in your pocket?", 'category' => 1],
        ['question'=>"Do you daydream when you ought to be listening to something?", 'category' => 1],
        ['question'=>"Do you find you forget people’s names?", 'category' => 1],
        ['question'=>"Do you start doing one thing at home and get distracted into doing something else (unintentionally)?", 'category' => 1],
        ['question'=>"Do you find you can’t quite remember something although it’s “on the tip of your tongue”?", 'category' => 1],
        ['question'=>"Do you find you forget what you came to the shops to buy?", 'category' => 1],
        ['question'=>"Do you drop things?", 'category' => 1],
        ['question'=>"Do you find you can’t think of anything to say?", 'category' => 1],

        // ['question'=>"In general, would you say your health is:", 'category' => 2],
        // ['question'=>"Compared to one year ago, how would you rate your health in general now?", 'category' => 2],
        // ['question'=>"Does your health now limit you in Vigorous activities, such as running, lifting heavy objects, participating in strenuous sports", 'category' => 2],
        // ['question'=>"Does your health now limit you in Moderate activities, such as moving a table, pushing a vacuum cleaner, bowling, or playing golf", 'category' => 2],
        // ['question'=>"Does your health now limit you in Lifting or carrying groceries", 'category' => 2],
        // ['question'=>"Does your health now limit you in Climbing several flights of stairs", 'category' => 2],
        // ['question'=>"Does your health now limit you in Climbing one flight of stairs", 'category' => 2],
        // ['question'=>"Does your health now limit you in Bending, kneeling, or stooping", 'category' => 2],
        // ['question'=>"Does your health now limit you in Walking more than a mile", 'category' => 2],
        // ['question'=>"Does your health now limit you in Walking several blocks", 'category' => 2],
        // ['question'=>"Does your health now limit you in Walking one block", 'category' => 2],
        // ['question'=>"Does your health now limit you in Bathing or dressing yourself", 'category' => 2],
        // ['question'=>"During the past 4 weeks, have you had any of the following problems with your work or other regular daily activities as a result of your physical health? Cut down the amount of time you spent on work or other activities", 'category' => 2],
        // ['question'=>"Accomplished less than you would like", 'category' => 2],
        // ['question'=>"Were limited in the kind of work or other activities", 'category' => 2],
        // ['question'=>"Had difficulty performing the work or other activities (for example, it took extra effort)", 'category' => 2],
        // ['question'=>"During the past 4 weeks, to what extent has your physical health or emotional problems interfered with your normal social activities with family, friends, neighbors, or groups?", 'category' => 2],
        // ['question'=>"During the past 4 weeks, how much did pain interfere with your normal work (including both work outside the home and housework)?", 'category' => 2],
        // ['question'=>"During the past 4 weeks, how much of the time has your physical health or emotional problems interfered with your social activities (like visiting with friends, relatives, etc.)?", 'category' => 2],
        // ['question'=>"I seem to get sick a little easier than other people", 'category' => 2],
        // ['question'=>"I am as healthy as anybody I know", 'category' => 2],
        // ['question'=>"I expect my health to get worse", 'category' => 2],
        // ['question'=>"My health is excellent", 'category' => 2],


        ]);


    }
}
