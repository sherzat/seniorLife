<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementUserTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('achievement_user', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('achievement_id')->unsigned();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('achievement_id')->references('id')->on('achievements');
          $table->timestamps();
      });
  }
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('achievement_user');
  }
}
