<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFightsTableAddProtectedPowerAndAttackPowerAndUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fights', function (Blueprint $table) {
            $table->unsignedBigInteger('protected_power')->nullable()->after('protected_code');
            $table->unsignedBigInteger('attack_power')->nullable()->after('attack_code');
            $table->foreignId('user_id')->after('comment');
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fights', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('protected_power');
            $table->dropColumn('attack_power');
            $table->dropColumn('user_id');
        });
    }
}
