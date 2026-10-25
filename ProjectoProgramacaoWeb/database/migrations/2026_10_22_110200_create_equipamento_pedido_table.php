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
        Schema::create('EquipamentoPedido', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->foreignId('id_registo')->constrained('registo_aluguer', 'id_registo')->cascadeOnDelete();
            $table->foreignId('pin')->constrained('equipamento', 'pin')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('EquipamentoPedido');
    }
};