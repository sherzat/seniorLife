<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompleteRateToAchievementUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('achievement_user', function (Blueprint $table) {
            $table->integer('complete_rate')->default(0);
            $table->boolean('is_achieved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achievement_user', function (Blueprint $table) {
            $table->dropColumn('complete_rate');
            $table->dropColumn('is_achieved');
        });
    }
}
