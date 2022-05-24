<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {

            $table->id();
            $table->dateTime('date');
            $table->foreignId('arbitre_centre')->constrained('arbitres');
            $table->foreignId('arbitre_ass1')->constrained('arbitres');
            $table->foreignId('arbitre_ass2')->constrained('arbitres');
            $table->foreignId('equipe_recevante')->constrained('equipes');
            $table->foreignId('equipe_visiteuse')->constrained('equipes');
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
        Schema::dropIfExists('matches');
    }
};
