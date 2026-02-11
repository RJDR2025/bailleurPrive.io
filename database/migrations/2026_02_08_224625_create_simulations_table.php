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
        Schema::create('simulations', function (Blueprint $table) {
            $table->id();

            // Informations contact
            $table->string('prenom');
            $table->string('nom');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->boolean('accepte_contact')->default(false);

            // Informations bien immobilier
            $table->decimal('prix_bien', 12, 2);
            $table->enum('type_bien', ['neuf', 'renove']);
            $table->decimal('surface', 8, 2);

            // Niveau de loyer
            $table->enum('niveau_loyer', ['intermediaire', 'social', 'tres_social']);

            // Situation fiscale
            $table->decimal('tmi', 5, 2);

            // Résultats calculés
            $table->decimal('base_amortissable', 12, 2);
            $table->decimal('taux_amortissement', 5, 4);
            $table->decimal('amortissement_brut', 12, 2);
            $table->decimal('plafond', 12, 2);
            $table->boolean('est_plafonne')->default(false);
            $table->decimal('amortissement_annuel', 12, 2);
            $table->decimal('economie_annuelle', 12, 2);
            $table->decimal('economie_totale', 12, 2);

            // Métadonnées
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulations');
    }
};
