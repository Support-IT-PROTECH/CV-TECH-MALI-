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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->longText('experience');
            $table->string('date_naissance');
            $table->string('age');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('diplome');
            $table->string('niveau_travail');
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
