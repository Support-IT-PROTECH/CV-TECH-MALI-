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
        //creation de la table credential (les informations de l'utilisateur)
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->string("date_naissance");
            $table->string("age");
            $table->string("email");
            $table->string("telephone");
            $table->string("adresse");
            $table->string("Diplome");
            $table->string("niveau_travail");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentials');
    }
};
