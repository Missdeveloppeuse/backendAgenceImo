<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {

            $table->id();

            $table->string('titre');

            $table->text('description');

            $table->integer('prix');

            $table->string('image')->nullable();

            $table->string('type');

            $table->string('statut')->default('disponible');
            $table-> integer('nombre_chambre');
            $table-> integer('nombre_sallebain');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};