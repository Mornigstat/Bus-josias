<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('lieu_depart');
            $table->string('lieu_arrivee');
            $table->date('date_depart');
            $table->time('heure_depart')->nullable(); // Modifier pour accepter les valeurs NULL
            // Ajoutez d'autres colonnes nécessaires pour les recherches
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
        Schema::dropIfExists('searches');
    }
}
