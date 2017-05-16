<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([

            ["img_src"=>'/img/categorys/001-mind.svg', "name"=>"cognition", "description"=>"this is cognition failer questions"],
            ["img_src"=>'/img/categorys/010-fruit-salad.svg', "name"=>"nutrition", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/008-dumbbell.svg', "name"=>"fitness", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/005-doctor.svg', "name"=>"personal care", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/001-chat.svg', "name"=>"communication", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/004-construction.svg', "name"=>"housing", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/001-bike.svg', "name"=>"mobility", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/003-people.svg', "name"=>"community life", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/006-learning.svg', "name"=>"education", "description"=>"How do you generally accomplishes the following activities"],
            ["img_src"=>'/img/categorys/002-businessman.svg', "name"=>"recreation", "description"=>"How do you generally accomplishes the following activities"],

        ]);
    }
}
