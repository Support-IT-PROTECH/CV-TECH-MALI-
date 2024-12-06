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
        // creation de la table profile
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("nom");
            $table->string("prenom");
            $table->longText("description");
            $table->longText("experience");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
