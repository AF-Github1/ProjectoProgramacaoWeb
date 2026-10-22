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
        Schema::create('Registo', function (Blueprint $table) {
            $table->id('id_registo');
            $table->foreignId('id_utilizador')->constrained('Utilizadores', 'id_utilizador')->cascadeOnDelete();
            $table->string('estado_pedido');
            $table->date('data_aluguer');
            $table->date('data_maxima_devolucao');
            $table->date('data_devolucao')->nullable();
            $table->decimal('preco', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Registo');
    }
};