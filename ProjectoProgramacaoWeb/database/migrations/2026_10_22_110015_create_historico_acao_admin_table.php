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
        Schema::create('HistoricoAcaoAdmin', function (Blueprint $table) {
            $table->id('id_acao');
            $table->foreignId('id_admin')->constrained('Admins', 'id_admin')->cascadeOnDelete();
            $table->string('descricao');
            $table->date('data_acao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HistoricoAcaoAdmin');
    }
};