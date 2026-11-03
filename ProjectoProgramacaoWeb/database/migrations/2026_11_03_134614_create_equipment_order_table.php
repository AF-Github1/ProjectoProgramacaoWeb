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
        Schema::create('equipment_order', function (Blueprint $table) {
            $table->integer('id_order')->autoIncrement();
            $table->integer('pin');
            $table->integer('id_record');

            $table->foreign('pin')
                  ->references('pin')
                  ->on('equipment')
                  ->onDelete('cascade');

            $table->foreign('id_record')
                  ->references('id_record')
                  ->on('rental_record')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_order');
    }
};