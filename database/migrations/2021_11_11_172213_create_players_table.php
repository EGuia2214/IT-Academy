<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_name', 50);//segundo parámetro es el tamaño del campo
            $table->string('player_team', 50)->foreignId('player_team')->references('id')->on('teams');//segundo parámetro es el tamaño del campo
            $table->tinyInteger('age');
            $table->year('year_of_birth');
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
        Schema::dropIfExists('players');
    }
}
