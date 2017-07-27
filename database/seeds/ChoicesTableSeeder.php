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
            ["choice"=>"Very often", "weight"=>1],
            ["choice"=>"Quite often", "weight"=>2],
            ["choice"=>"Occasionally", "weight"=>3],
            ["choice"=>"Very rarely", "weight"=>4],
            ["choice"=>"Never", "weight"=>5],

            ["choice"=>"Not applicable", "weight"=>0],
            ["choice"=>"No difficulty", "weight"=>5],
            ["choice"=>"With difficulty", "weight"=>3.75],
            ["choice"=>"Accomplished by a proxy", "weight"=>2.5],
            ["choice"=>"Not accomplished", "weight"=>1.25],

            ["choice"=>"One", "weight"=>5],
            ["choice"=>"Two", "weight"=>4],
            ["choice"=>"Three", "weight"=>3],
            ["choice"=>"Four", "weight"=>2],
            ["choice"=>"Five", "weight"=>1],


        ]);
    }
}
