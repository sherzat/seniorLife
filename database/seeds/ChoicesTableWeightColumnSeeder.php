<?php

use Illuminate\Database\Seeder;

class ChoicesTableWeightColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->where('id', 1)->update(['weight' => 1.0]);
        DB::table('choices')->where('id', 2)->update(['weight' => 2.0]);
        DB::table('choices')->where('id', 3)->update(['weight' => 3.0]);
        DB::table('choices')->where('id', 4)->update(['weight' => 4.0]);
        DB::table('choices')->where('id', 5)->update(['weight' => 5.0]);
        
    }
}
