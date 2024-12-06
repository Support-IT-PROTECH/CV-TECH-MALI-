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
        //creation de la table valeur de l'entrprise
        Schema::create('entreprise_valeurs', function (Blueprint $table) {
            $table->id();
            $table->string('valeurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprise_valeurs');
    }
};
