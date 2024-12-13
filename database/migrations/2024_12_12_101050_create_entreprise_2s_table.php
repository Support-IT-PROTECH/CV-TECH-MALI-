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
        Schema::create('entreprise_2s', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nom');
            $table->string('domaine');
            $table->longText("description");
            $table->longText('vision');
            $table->longText('nom_valeur');
            $table->longText('nom_secteur_activite');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('site_web');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprise_2s');
    }
};
