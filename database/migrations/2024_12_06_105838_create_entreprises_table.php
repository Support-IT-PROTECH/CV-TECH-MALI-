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
        //creation de la table entreprise
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('domaine');
            $table->longText("description");
            $table->longText('vision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
