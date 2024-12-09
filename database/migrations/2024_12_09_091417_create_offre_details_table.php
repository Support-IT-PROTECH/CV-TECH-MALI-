<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creation des details de l'offres (table)
     * Regroupera tous les details lies a l'offres
     */
    public function up(): void
    {
        Schema::create('offre_details', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'offre ici
             * $table->foreignIdFor(Offre::class);
             *
             */
            $table->string("adresse_offre");
            $table->string("situation_offre")->default("Temps plein"); // Temps plein ou temps partiel
            $table->string("horaire_offre"); // Nbres d'heures par semaine
            $table->string("salaire_offre");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre_details');
    }
};
