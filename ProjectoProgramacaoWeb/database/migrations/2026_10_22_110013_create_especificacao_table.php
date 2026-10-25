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
        Schema::create('especificacao', function (Blueprint $table) {
        $table->id('cat_code');
        $table->string('nome');
        $table->decimal('peso', 8, 2);
        $table->string('tipo_consumo');
        $table->string('descricao');
        $table->string('marca');
        $table->string('dimensoes');
        $table->decimal('preco_tempo', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especificacao');
    }
};
