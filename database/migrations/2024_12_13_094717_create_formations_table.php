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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_formation');
            $table->string('lieu_formation');
            $table->string('date_debut_fin_formation');
            $table->longText('description_formation');
            $table->string('nom_competence');
            // $table->string('niveau_competence');
            $table->string('nom_experience_professionnelle');
            $table->string('date_debut_fin_experience_professionnelle');
            $table->string('lieu_experience_professionnelle');
            $table->longText('objective_professionnelle');
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
