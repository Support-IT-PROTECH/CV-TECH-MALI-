<?php

use App\Models\Offre;
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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            /**
             * Il y aura la colonne de l'Entreprise ici
             * $table->foreignIdFor(Entreprise::class);
             *
             */
            $table->string("nom_offre")->nullable();
            $table->string("date_limite");
            $table->text("description");
            $table->text("role");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
