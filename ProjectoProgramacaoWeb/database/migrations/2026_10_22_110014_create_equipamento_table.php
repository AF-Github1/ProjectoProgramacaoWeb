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
        Schema::create('equipamento', function (Blueprint $table) {
        $table->id('pin');
        $table->foreignId('cat_code')->constrained('especificacao', 'cat_code');
        $table->foreignId('id_local')->constrained('locais', 'id_local');
        $table->date('data_adquirido');
        $table->string('descricao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamento');
    }
};