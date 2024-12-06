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
        //cration de la table experience professionnel
        Schema::create('experience_professionnels', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("lieu");
            $table->string('duree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_professionnels');
    }
};
