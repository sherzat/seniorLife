<?php

use Illuminate\Database\Seeder;

class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([

            ['point' =>(5),
            'title' => ('welcome aboard'),
            'description' => ('You have registered successfully'),
            'badge' => ('/img/badges/welcome-aboard.png'),],

            ['point' =>(8),
                'title' => ('first survey'),
                'description' => ('complete a survey for the first time'),
                'badge' => ('/img/badges/you-did-it.png'),],

            ['point' =>(10),
                'title' => ('keep it up'),
                'description' => ('filled all category once'),
                'badge' => ('/img/badges/keep-it-up.png'),],

            ['point' =>(10),
                'title' => ('second level'),
                'description' => ('reach level 2'),
                'badge' => ('/img/badges/level2.png'),],

            ['point' =>(20),
                'title' => ('level ten'),
                'description' => ('reach level 10'),
                'badge' => ('/img/badges/level10.png'),],

            ['point' =>(20),
                'title' => ('level twenty'),
                'description' => ('reach level 20'),
                'badge' => ('/img/badges/level20.png'),],

            ['point' =>(20),
                'title' => ('level thirty'),
                'description' => ('reach level 30'),
                'badge' => ('/img/badges/level30.png'),],
            ['point' =>(20),
                'title' => ('level forty'),
                'description' => ('reach level 40'),
                'badge' => ('/img/badges/level40.png'),],

            ['point' =>(20),
                'title' => ('level fifty'),
                'description' => ('reach level 50'),
                'badge' => ('/img/badges/level50.png'),],

            ['point' =>(40),
                'title' => ('collect points'),
                'description' => ('collect 250 points'),
                'badge' => ('/img/badges/250-points-collected.png'),],

            ['point' =>(50),
                'title' => ('collect points'),
                'description' => ('collect 500 points'),
                'badge' => ('/img/badges/500points-collected.png'),],

            ['point' =>(60),
                'title' => ('collect points'),
                'description' => ('collect 5000 points'),
                'badge' => ('/img/badges/1000-points-collected.png'),],

            ['point' =>(80),
                'title' => ('collect points'),
                'description' => ('collect 15000 points'),
                'badge' => ('/img/badges/survey-king.png'),],

            ['point' =>(15),
                'title' => ('survey intermediate'),
                'description' => ('complete all surveys in one day'),
                'badge' => ('/img/badges/fill-5-survey.png'),],

            ['point' =>(30),
                'title' => ('survey advanced'),
                'description' => ('fill 40 category in one week'),
                'badge' => ('/img/badges/7-survey-filled.png'),],
            ['point' =>(10),
                'title' => ('challenge'),
                'description' => ('finish one survey every day for one week'),
                'badge' => ('/img/badges/challenge-1-accomplished.png'),],

            ['point' =>(20),
                'title' => ('challenge'),
                'description' => ('finish one survey every day for one month'),
                'badge' => ('/img/badges/challenge-2-accomplished.png'),],

            ['point' =>(50),
                'title' => ('challenge'),
                'description' => ('finish one survey every day for 6 month'),
                'badge' => ('/img/badges/challenge-3-accomplished.png'),],

            ['point' =>(300),
                'title' => ('challenge'),
                'description' => ('finish one survey every day for year'),
                'badge' => ('/img/badges/challenge-4-acomplished.png'),],
        ]);
    }
}
