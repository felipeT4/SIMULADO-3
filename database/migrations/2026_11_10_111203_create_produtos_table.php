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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id');
            $table->foreignId('fornecedor_id');
            $table->string( 'nome');
            $table->string( 'descricao');
            $table->string( 'marca');
            $table->string('categoria');
            $table->decimal( 'p_custo');
            $table->decimal('p_venda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
