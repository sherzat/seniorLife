<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'sherzat',
            'email' => 'sherzat.ablimit'.'@gmail.com',
            'password' => bcrypt('sherzat05'),
        ]);
    }
}

