<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * Creation de la table Competences techniques
     * Regroupera tous les competences lies a l'offres
     */
    public function up(): void
    {
        Schema::create('competence_techniques', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'offre ici
             * $table->foreignIdFor(Offre::class);
             *
             */
            $table->string("nom_de_la_competence");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre_competence_techniques');
    }
};
