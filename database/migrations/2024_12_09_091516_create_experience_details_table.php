<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creation de la table experience des details
     * Bac +5, Exp+4

     */
    public function up(): void
    {
        Schema::create('experience_details', function (Blueprint $table) {
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
        Schema::dropIfExists('offre_experience_details');
    }
};
