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
            ['point' =>(10),
            'title' => ('welcome aboard'),
            'description' => ('you have registered successfully'),
            'badge' => ('/img/badges/welcome_aboard.png'),],

            ['point' =>(10),
                'title' => ('keep it up'),
                'description' => ('loged every day for 1 week'),
                'badge' => ('/img/badges/keeep_it_up.png'),],

            ['point' =>(20),
                'title' => ('regular'),
                'description' => ('loged every day for at least 2 weeks'),
                'badge' => ('/img/badges/regular.png'),],

            ['point' =>(10),
                'title' => ('survey biginner'),
                'description' => ('complete at least 5 surveys'),
                'badge' => ('/img/badges/survey_beginner.png'),],

            ['point' =>(50),
                'title' => ('survey advanced'),
                'description' => ('complete at least 40 surveys'),
                'badge' => ('/img/badges/survey_advanced.png'),],

            ['point' =>(20),
                'title' => ('survey casual'),
                'description' => ('complete at least 10 surveys'),
                'badge' => ('/img/badges/survey_casual.png'),],

            ['point' =>(30),
                'title' => ('survey intermediate'),
                'description' => ('complete at least 20 surveys'),
                'badge' => ('/img/badges/survey_intermediate.png'),],

            ['point' =>(10),
                'title' => ('first survey'),
                'description' => ('complete a survey for the first time'),
                'badge' => ('/img/badges/first_survey.png'),],
        ]);
    }
}
