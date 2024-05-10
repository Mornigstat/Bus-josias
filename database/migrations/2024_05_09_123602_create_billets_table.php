<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->string('numero_matricule', 9)->unique();
            $table->string('ville_depart');
            $table->string('ville_arrivee');
            $table->text('arrets_intermediaires')->nullable();
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->decimal('prix', 10, 2);
            $table->unsignedBigInteger('compagnies_id');
            $table->foreign('compagnies_id')->references('id')->on('compagnies')->onDelete('cascade');
            $table->string('type_bus')->nullable();
            $table->integer('capacite_bus')->nullable();
            $table->text('equipements')->nullable();
            $table->text('restrictions')->nullable();
            $table->string('gare_depart')->nullable();
            $table->string('gare_arrivee')->nullable();
            $table->string('lien_google_maps_depart')->nullable();
            $table->string('lien_google_maps_arrivee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billets');
    }
};

