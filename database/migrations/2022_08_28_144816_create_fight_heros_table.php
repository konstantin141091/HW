<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFightHerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fight_heros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fight_id');
            $table->foreign('fight_id')->references('id')->on('fights')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('hero_id');
            $table->foreign('hero_id')->references('id')->on('heros')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedMediumInteger('power')->nullable();
            $table->enum('type', ['attack', 'protected']);
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
        Schema::dropIfExists('fight_heros');
    }
}
