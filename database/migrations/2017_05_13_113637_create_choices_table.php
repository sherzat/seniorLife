<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('choices', function (Blueprint $table) {
          $table->increments('id');
          $table->string('choice', 100)->nullable();
          $table->float('weight', 8, 2)->nullable();
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
      Schema::dropIfExists('choices');
  }
}
