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
        Schema::create('cardapioestabelecimento', function (Blueprint $table) {
            $table->increments('Codigo');
            $table->string('Nome');
            $table->string('Ingredientes');
            $table->decimal('price');
            $table->string('Alimentonum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
