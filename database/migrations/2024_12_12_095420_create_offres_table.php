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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_entreprise');
            $table->string('nom_offre');
            $table->string('logo_offre');
            $table->string('date_limite');
            $table->text('description');
            $table->text('role');
            $table->json('competence_technique');
            $table->json('competence_personnelle');
            $table->json('responsabilite_offre');
            $table->string('adresse_offre');
            $table->string('situation_offre')->default("Temps Plein");
            $table->json('experience_professionnelles');
            $table->string('horaire_offre');
            $table->string('salaire_offre');
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