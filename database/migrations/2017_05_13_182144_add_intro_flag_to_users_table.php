<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntroFlagToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('mysurveyflag')->default(0);
            $table->boolean('challengsflag')->default(0);
            $table->boolean('rankflag')->default(0);
            $table->boolean('achievementflag')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mysurveyflag');
            $table->dropColumn('challengsflag');
            $table->dropColumn('rankflag');
            $table->dropColumn('achievementflag');
        });
    }
}
