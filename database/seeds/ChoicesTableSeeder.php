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
            ["choice"=>"never"],
            ["choice"=>"rarely"],
            ["choice"=>"sometimes"],
            ["choice"=>"most of the time"],
            ["choice"=>"always"],
            ["choice"=>"no"],
            ["choice"=>"yes"],
            ["choice"=>"male"],
            ["choice"=>"female"],
            ["choice"=>"other"],
            ["choice"=>"under 45 "],
            ["choice"=>"45 to 64"],
            ["choice"=>"65 to 74"],
            ["choice"=>"75 to 84 "],
            ["choice"=>"85 or more"],
            ["choice"=>"excellent or good"],
            ["choice"=>"fair or poor"],
            ["choice"=>"less than one year"],
            ["choice"=>"one year to two year"],
            ["choice"=>"more than two years"],
        ]);
    }
}
