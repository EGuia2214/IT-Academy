<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('local_team')->foreignId('local_team')->references('id')->on('teams');
            
            $table->tinyInteger('local_score');

            $table->unsignedBigInteger('visitor_team')->foreignId('visitor_team')->references('id')->on('teams');
            
            $table->tinyInteger('visitor_score');

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
        Schema::dropIfExists('scores');
    }
}
