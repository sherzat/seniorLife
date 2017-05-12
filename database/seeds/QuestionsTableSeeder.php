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

        
        ]);

        //
        // DB::table('questions')->insert([
        //     ['question'=>"I can be alone when I wish.", 'category' => 1],
        //     ["question"=>"I get my favorite foods here.", "category"=>2],
        //     ["question"=>"I can eat when I want.", "category"=>2],
        //     ["question"=>"I have enough variety in my meals.", "category"=>2],
        //     ["question"=>"I enjoy mealtimes.", "category"=>2],
        //     ["question"=>"Food is the right temperature when I get to eat it.", "category"=>2],
        //     ["question"=>"If I need help right away, I can get it.", "category"=>3],
        //     ["question"=>"I feel my possessions are secure.", "category"=>3],
        //     ["question"=>"I feel safe when I am alone.", "category"=>3],
        //     ["question"=>"I get the services I need.", "category"=>4],
        //     ["question"=>"I would recommend this site or organization to others.", "category"=>4],
        //     ["question"=>"This place feels like home to me.", "category"=>4],
        //     ["question"=>"I can easily go outdoors if I want", "category"=>4],
        //     ["question"=>"I am bothered by the noise here.", "category"=>4],
        //     ["question"=>"I can have a bath or shower as often as I want.", "category"=>5],
        //     ["question"=>"I decide when to get up.", "category"=>5],
        //     ["question"=>"I decide when to go to bed.", "category"=>5],
        //     ["question"=>"I can go where I want on the \u201cspur of the moment.\u201d", "category"=>5],
        //     ["question"=>"I control who comes into my room.", "category"=>5],
        //     ["question"=>"I decide which clothes to wear.", "category"=>5],
        //     ["question"=>"I decide how to spend my time", "category"=>5],
        //     ["question"=>"I am treated with respect by staff.", "category"=>6],
        //     ["question"=>"Staff pay attention to me", "category"=>6],
        //     ["question"=>"I can express my opinion without fear of consequences.", "category"=>6],
        //     ["question"=>"Staff respect what I like and dislike.", "category"=>6],
        //     ["question"=>"The care and support I get help me live my life the way I want.", "category"=>7],
        //     ["question"=>"Staff respond quickly when I ask for assistance.", "category"=>7],
        //     ["question"=>"[this site] staff respond to my suggestions.", "category"=>7],
        //     ["question"=>"I get the health services I need.", "category"=>7],
        //     ["question"=>"Staff have enough time for me", "category"=>7],
        //     ["question"=>"Staff know what they are doing.", "category"=>7],
        //     ["question"=>"My services are delivered when I want them.", "category"=>7],
        //     ["question"=>"Some of the staff know the story of my life.", "category"=>8],
        //     ["question"=>" I consider a staff member my friend.", "category"=>8],
        //     ["question"=>" I have a special relationship with a staff member.", "category"=>8],
        //     ["question"=>" Staff take the time to have a friendly conversation with me.", "category"=>8],
        //     ["question"=>"Staff ask how my needs can be met", "category"=>8],
        //     ["question"=>"I have the same nurse assistant on most weekdays.", "category"=>8],
        //     ["question"=>"I have enjoyable things to do here on weekends", "category"=>9],
        //     ["question"=>"I have enjoyable things to do here in the evenings.", "category"=>9],
        //     ["question"=>"I participate in meaningful activities.", "category"=>9],
        //     ["question"=>"If I want, I can participate in religious activities that have meaning to me.", "category"=>9],
        //     ["question"=>"I have opportunities to spend time with other like-minded residents.", "category"=>9],
        //     ["question"=>"I have the opportunity to explore new skills and interests.", "category"=>9],
        //     ["question"=>"Another resident here is my close friend.", "category"=>10],
        //     ["question"=>"People ask for my help or advice.", "category"=>10],
        //     ["question"=>"I have opportunities for affection or romance.", "category"=>10],
        //     ["question"=>"It is easy to make friends here.", "category"=>10],
        //     ["question"=>"I have people who want to do things together with me.", "category"=>10],
        //     ["question"=>" I am part of a couple.", "category"=>11],
        //     ["question"=>"My gender is . . .", "category"=>11],
        //     ["question"=>"My age in years is . . .", "category"=>11],
        //     ["question"=>"My health is . . .", "category"=>11],
        //     ["question"=>" I have lived at ____________________ [this site / this organization] for . . .", "category"=>11]
        // ]);
    }
}
