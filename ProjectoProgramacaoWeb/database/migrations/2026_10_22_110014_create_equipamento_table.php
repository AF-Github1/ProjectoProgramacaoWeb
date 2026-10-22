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
        Schema::create('Equipamento', function (Blueprint $table) {
            $table->id('id_equipamento');
            $table->foreignId('id_local')->constrained('Locais', 'id_local')->cascadeOnDelete();
            $table->string('nome');
            $table->string('tipo');
            $table->date('data_adquirido');
            $table->decimal('preco_por_unidade_tempo', 8, 2);
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Equipamento');
    }
};