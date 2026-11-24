<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Une catégorie contient une icone de type chaine et un nom de type chaine avec une longueur max 20 caractères
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();            
            $table->string('name', 20);
            $table->string('icon', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
