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
        ['question'=>"Do you read something and find you haven’t been thinking about it and must read it again?", 'category_id' => 1],
        ['question'=>"Do you find you forget why you went from one part of the house to the other?", 'category_id_id' => 1],
        ['question'=>"Do you fail to notice signposts on the road?", 'category_id' => 1],
        ['question'=>"Do you find you confuse right and left when giving directions?", 'category_id' => 1],
        ['question'=>"Do you bump into people?", 'category_id' => 1],
        ['question'=>"Do you find you forget whether you’ve turned off a light or a fire or locked the door?", 'category_id' => 1],
        ['question'=>"Do you fail to listen to people’s names when you are meeting them?", 'category_id' => 1],
        ['question'=>"Do you say something and realize afterwards that it might be taken as insulting?", 'category_id' => 1],
        ['question'=>"Do you fail to hear people speaking to you when you are doing something else?", 'category_id' => 1],
        ['question'=>"Do you lose your temper and regret it?", 'category_id' => 1],
        ['question'=>"Do you leave important letters unanswered for days?", 'category_id' => 1],
        ['question'=>"Do you find you forget which way to turn on a road you know well but rarely use?", 'category_id' => 1],
        ['question'=>"Do you fail to see what you want in a supermarket (although it’s there)?", 'category_id' => 1],
        ['question'=>"Do you find yourself suddenly wondering whether you’ve used a word correctly?", 'category_id' => 1],
        ['question'=>"Do you have trouble making up your mind?", 'category_id' => 1],
        ['question'=>"Do you find you forget appointments?", 'category_id' => 1],
        ['question'=>"Do you forget where you put something like a newspaper or a book?", 'category_id' => 1],
        ['question'=>"Do you find you accidentally throw away the thing you want and keep what you meant to throw away – as in the example of throwing away the matchbox and putting the used match in your pocket?", 'category_id' => 1],
        ['question'=>"Do you daydream when you ought to be listening to something?", 'category_id' => 1],
        ['question'=>"Do you find you forget people’s names?", 'category_id' => 1],
        ['question'=>"Do you start doing one thing at home and get distracted into doing something else (unintentionally)?", 'category_id' => 1],
        ['question'=>"Do you find you can’t quite remember something although it’s “on the tip of your tongue”?", 'category_id' => 1],
        ['question'=>"Do you find you forget what you came to the shops to buy?", 'category_id' => 1],
        ['question'=>"Do you drop things?", 'category_id' => 1],
        ['question'=>"Do you find you can’t think of anything to say?", 'category_id' => 1],


         ['question'=>"How do you generally select appropriate food for your meals, according to your taste and particular needs (quantity, type of food)", 'category_id' => 2],
         ['question'=>"preparing your meals (including using electric kitchen appliances)", 'category_id' => 2],
         ['question'=>"eating in restaurants (table service and fast-food)", 'category_id' => 2],

         ['question'=>"getting in and out of bed", 'category_id' => 3],
         ['question'=>"sleep (comfort, duration, continuity, etc)", 'category_id' => 3],
         ['question'=>"participating in physical activities to maintain or improve your physical fitness or health (walking, individual or group exercise)", 'category_id' => 3],
         ['question'=>"participating in relaxation, unwinding, or mental focus activities to ensure your psychological or mental wellbeing (yoga, meditation, person growth, chess, etc)", 'category_id' => 3],

         ['question'=>"attending to your personal hygiene (washing yourself, doing your hair, taking a bath or shower, etc)", 'category_id' => 4],
         ['question'=>"using the bathroom and toilet in your home (and other devices for elimination)", 'category_id' => 4],
         ['question'=>"using a bathroom and toilet other than those in your home (and other devices for elimination)", 'category_id' => 4],
         ['question'=>"Dressing and undressing the upper half of your body (clothing, accesories, including the choice of clothes)", 'category_id' => 4],
         ['question'=>"dressing and undressing the lower half of your body (clothing, accessories, including the choice of clothes)", 'category_id' => 4],
         ['question'=>"putting on, removing, and maintaining your assistive devices (orthotics, prosthetics, contact lenses, glasses, etc)", 'category_id' => 4],

         ['question'=>"communication with another person at home or in the community (expressing needs, holding a conversation, etc)", 'category_id' => 5],
         ['question'=>"communicating with a group of people at home or in the community (expressing needs, holding a conversation, etc)", 'category_id' => 5],
         ['question'=>"written communication (writing a letter, message)", 'category_id' => 5],
         ['question'=>"reading and understanding written information (newspaper, books, letters, signs, etc)", 'category_id' => 5],
         ['question'=>"using a phone or mobile phone", 'category_id' => 5],
         ['question'=>"using a computer", 'category_id' => 5],
         ['question'=>"using a radio, television or sound system", 'category_id' => 5],

         ['question'=>"maintaining your home (cleaning, laundry, minor repairs)", 'category_id' => 6],
         ['question'=>"maintaining the grounds of your home (lawn, garden, snow removal, ect)", 'category_id' => 6],
         ['question'=>"painting, major repairs, etc)", 'category_id' => 6],
          ['question'=>"entering and exiting your home", 'category_id' => 6],
          ['question'=>"moving around within your home", 'category_id' => 6],
          ['question'=>"using the furniture and home-furnishing equipment in your home (desk, thermostat, radiator system, etc)", 'category_id' => 6],
         ['question'=>"moving around outside your home (yard, grounds, etc)", 'category_id' => 6],

          ['question'=>"getting around on streets or sidewalks (including crossing streets)", 'category_id' => 7],
         ['question'=>"getting around on slippery or uneven surfaces (snow, ice, grass, gravel)", 'category_id' => 7],
          ['question'=>"getting around on slippery or uneven surfaces (snow, ice, grass, gravel)", 'category_id' => 7],
        ['question'=>"driving a vehicle", 'category_id' => 7],
        ['question'=>"riding a bicycle (for transportation, recreation)", 'category_id' => 7],
        ['question'=>"being a passenger in a vehicle (car, bus, taxi)", 'category_id' => 7],

     /*   ['question'=>"recognizing the value of money and correctly using the different denominations of paper and coin money", 'category_id' => 8],
        ['question'=>"using bank cards and ATMs", 'category_id' => 8],
       ['question'=>"making purchases", 'category_id' => 8],
        ['question'=>"planning your budget and meeting your financial obligations", 'category_id' => 8],
         ['question'=>"maintaining a close relationship with members of your familiy", 'category_id' => 9],
       ['question'=>"maintaining social relationships with those around you (neighbours, in activities)", 'category_id' => 9],
          ['question'=>"having a sexual relationship (healthy, appropriate, safe sex)", 'category_id' => 9],*/

          ['question'=>"getting to public buildings in your community (governmental, financial, judicial, postal)", 'category_id' => 8],
          ['question'=>"entering and getting around in public buildings in your community", 'category_id' => 8],
          ['question'=>"using the public services in your community", 'category_id' => 8],
          ['question'=>"getting to commercial establishments in your community (supermarket, shopping mall, convenience, etc)", 'category_id' => 8],
          ['question'=>"entering and moving around in commercial establishments in your community (supermarket, shopping mall, convenience store, etc)", 'category_id' => 8],
          ['question'=>"participating in spiritual or religious practices", 'category_id' => 8],
          ['question'=>"participating in social or community groups (social clubs, charity or religious groups)", 'category_id' => 8],

          ['question'=>"participating in educational activities or vocational training at the high school level (courses, homework, extracurricular activities)", 'category_id' => 9],
          ['question'=>"undertaking vocational training (trade school, university, community college)", 'category_id' => 9],

          ['question'=>"participating in sporting or recreational activities (walking, sports, games, etc)", 'category_id' => 10],
          ['question'=>"participating in artistic, cultural or craft activities (music, dance, woodworking)", 'category_id' => 10],
          ['question'=>"going to sporting events ", 'category_id' => 10],
          ['question'=>"going to artistic or cultural events", 'category_id' => 10],
          ['question'=>"taking part in outdoor activities", 'category_id' => 10],
          ['question'=>"participating in tourist activities (traveling, visiting natural or historic sites, camping)", 'category_id' => 10],
          ['question'=>"using your neighbourhood recreational services (library, municipal recreation centre, etc)", 'category_id' => 10],


      ]);


    }
}
