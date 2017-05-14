<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('points', function (Blueprint $table) {
               $table->increments('id');
               $table->integer('user_id')->unsigned()->index(); //user id of user getting points
               $table->integer('points_added')->unsigned(); //amount of points added
               $table->enum('points_genre', ['survey', 'challenge', 'other']); //type self if from action that the user did. type other if from other users action
               $table->timestamps();
               $table->softDeletes(); //optional but recommended

               //set foreign key relations
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //If user is deleted, also delete users points
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('points');
    }
}
