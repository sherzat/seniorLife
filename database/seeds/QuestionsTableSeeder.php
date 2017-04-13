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
        //
        DB::table('questions')->insert([
            ['question'=>"I can be alone when I wish.", 'category' => 1],
            ["question"=>"I get my favorite foods here.", "category"=>2],
            ["question"=>"I can eat when I want.", "category"=>2],
            ["question"=>"I have enough variety in my meals.", "category"=>2],
            ["question"=>"I enjoy mealtimes.", "category"=>2],
            ["question"=>"Food is the right temperature when I get to eat it.", "category"=>2],
            ["question"=>"If I need help right away, I can get it.", "category"=>3],
            ["question"=>"I feel my possessions are secure.", "category"=>3],
            ["question"=>"I feel safe when I am alone.", "category"=>3],
            ["question"=>"I get the services I need.", "category"=>4],
            ["question"=>"I would recommend this site or organization to others.", "category"=>4],
            ["question"=>"This place feels like home to me.", "category"=>4],
            ["question"=>"I can easily go outdoors if I want", "category"=>4],
            ["question"=>"I am bothered by the noise here.", "category"=>4],
            ["question"=>"I can have a bath or shower as often as I want.", "category"=>5],
            ["question"=>"I decide when to get up.", "category"=>5],
            ["question"=>"I decide when to go to bed.", "category"=>5],
            ["question"=>"I can go where I want on the \u201cspur of the moment.\u201d", "category"=>5],
            ["question"=>"I control who comes into my room.", "category"=>5],
            ["question"=>"I decide which clothes to wear.", "category"=>5],
            ["question"=>"I decide how to spend my time", "category"=>5],
            ["question"=>"I am treated with respect by staff.", "category"=>6],
            ["question"=>"Staff pay attention to me", "category"=>6],
            ["question"=>"I can express my opinion without fear of consequences.", "category"=>6],
            ["question"=>"Staff respect what I like and dislike.", "category"=>6],
            ["question"=>"The care and support I get help me live my life the way I want.", "category"=>7],
            ["question"=>"Staff respond quickly when I ask for assistance.", "category"=>7],
            ["question"=>"[this site] staff respond to my suggestions.", "category"=>7],
            ["question"=>"I get the health services I need.", "category"=>7],
            ["question"=>"Staff have enough time for me", "category"=>7],
            ["question"=>"Staff know what they are doing.", "category"=>7],
            ["question"=>"My services are delivered when I want them.", "category"=>7],
            ["question"=>"Some of the staff know the story of my life.", "category"=>8],
            ["question"=>" I consider a staff member my friend.", "category"=>8],
            ["question"=>" I have a special relationship with a staff member.", "category"=>8],
            ["question"=>" Staff take the time to have a friendly conversation with me.", "category"=>8],
            ["question"=>"Staff ask how my needs can be met", "category"=>8],
            ["question"=>"I have the same nurse assistant on most weekdays.", "category"=>8],
            ["question"=>"I have enjoyable things to do here on weekends", "category"=>9],
            ["question"=>"I have enjoyable things to do here in the evenings.", "category"=>9],
            ["question"=>"I participate in meaningful activities.", "category"=>9],
            ["question"=>"If I want, I can participate in religious activities that have meaning to me.", "category"=>9],
            ["question"=>"I have opportunities to spend time with other like-minded residents.", "category"=>9],
            ["question"=>"I have the opportunity to explore new skills and interests.", "category"=>9],
            ["question"=>"Another resident here is my close friend.", "category"=>10],
            ["question"=>"People ask for my help or advice.", "category"=>10],
            ["question"=>"I have opportunities for affection or romance.", "category"=>10],
            ["question"=>"It is easy to make friends here.", "category"=>10],
            ["question"=>"I have people who want to do things together with me.", "category"=>10],
            ["question"=>" I am part of a couple.", "category"=>11],
            ["question"=>"My gender is . . .", "category"=>11],
            ["question"=>"My age in years is . . .", "category"=>11],
            ["question"=>"My health is . . .", "category"=>11],
            ["question"=>" I have lived at ____________________ [this site / this organization] for . . .", "category"=>11]
        ]);
    }
}
