<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->string('attack_code');
            $table->string('protected_code');
            $table->foreignId('fight_type');
            $table->foreign('fight_type')->references('id')->on('fight_types')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('fights');
    }
}
