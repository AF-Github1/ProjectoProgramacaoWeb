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
        Schema::create('registo_aluguer', function (Blueprint $table) {
            $table->id('id_registo');
            $table->foreignId('id_cliente')->constrained('cliente', 'id_cliente')->cascadeOnDelete();
            $table->string('estado_pedido');
            $table->date('data_aluguer');
            $table->date('data_maxima_devolucao');
            $table->date('data_devolucao')->nullable();
            $table->decimal('preco', 8, 2)->nullable();
            $table->string('descricao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registo_aluguer');
    }
};