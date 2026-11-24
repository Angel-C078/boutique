<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Un produit contient un id (PK),
     * un nom de type chaine 
     * une description de type chaine
     * une photo de type chaine
     * un prix de type décimal
     * une réduction de type décimal
     * une quantité (stock de type décimal
     * nouveau (booléen)
     * id_categorie (FK)
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->string('photo', 255)->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->boolean('new')->default(false);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
