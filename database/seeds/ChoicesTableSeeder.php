<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('choices')->insert([
            ["choice"=>"very often", "weight"=>1],
            ["choice"=>"quite often", "weight"=>2],
            ["choice"=>"occasionally", "weight"=>3],
            ["choice"=>"very rarely", "weight"=>4],
            ["choice"=>"never", "weight"=>5],


            ["choice"=>"no difficulty", "weight"=>5],
            ["choice"=>"with difficulty", "weight"=>4],
            ["choice"=>"Accomplished by a proxy", "weight"=>3],
            ["choice"=>"Not accomplished", "weight"=>2],
            ["choice"=>"Not applicable", "weight"=>1],


        ]);
    }
}
