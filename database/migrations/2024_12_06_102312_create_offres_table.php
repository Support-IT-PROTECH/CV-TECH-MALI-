<?php

use App\Models\Offre;
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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'Entreprise ici
             * $table->foreignIdFor(Entreprise::class);
             *
             */
            $table->string("nom_offre")->nullable();
            $table->string("date_limite");
            $table->text("description");
            $table->text("role");
            $table->timestamps();
        });

        /**
         * Creation de la table Competences techniques
         * Regroupera tous les competences lies a l'offres
         */

        Schema::create('offres_competence_techniques', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'offre ici
             * $table->foreignIdFor(Offre::class);
             *
             */
            $table->string("nom_de_la_competence");
            $table->timestamps();
        });

        /**
         * Creation de la table Competences personnelles
         * Regroupera tous les competences lies a l'offres
         */

        Schema::create('offres_competence_personnelles', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'offre ici
             * $table->foreignIdFor(Offre::class);
             *
             */
            $table->string("nom_de_la_competence");
            $table->timestamps();
        });

        /**
         * Creation des details de l'offres (table)
         * Regroupera tous les details lies a l'offres
         */

        Schema::create('offres_details', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'offre ici
             * $table->foreignIdFor(Offre::class);
             *
             */
            $table->string("adresse_offres");
            $table->string("situation_offres")->default("Temps plein"); // Temps plein ou temps partiel
            $table->string("horaire_offres"); // Nbres d'heures par semaine
            $table->string("salaire_offres");
            $table->timestamps();
        });

        /**
         * Creation de la table experience des details
         * Bac +5, Exp+4
         */

        Schema::create('experiences_offres', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne des details ici
             * $table->foreignIdFor(DetailOffre::class);
             *
             */
            $table->string("nom");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};