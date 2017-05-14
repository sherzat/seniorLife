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
          ["name"=>"cognition", "description"=>"this is cognition failer questions"],
        ]);
    }
}
