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
        //creation de la table formation
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("lieu");
            $table->date("duree");
            $table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
