<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      //
      Schema::create('responses', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('question_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->integer('choice_id')->unsigned();

          $table->foreign('question_id')->references('id')->on('questions');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('choice_id')->references('id')->on('choices');
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
      //
      Schema::dropIfExists('responses');
  }
}
