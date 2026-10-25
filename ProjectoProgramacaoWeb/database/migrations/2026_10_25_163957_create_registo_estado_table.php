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
        Schema::create('registo_estado', function (Blueprint $table) {
        $table->id('id_registo_estado');
        $table->foreignId('pin')->constrained('equipamento', 'pin')->cascadeOnDelete();
        $table->string('estado');
        $table->dateTime('data_inicio');
        $table->dateTime('data_fim')->nullable();
        $table->string('motivo')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registo_estado');
    }
};
