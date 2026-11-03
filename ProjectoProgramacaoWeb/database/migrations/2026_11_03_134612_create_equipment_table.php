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
        Schema::create('equipment', function (Blueprint $table) {
            $table->integer('pin')->primary();
            $table->integer('cat_code');
            $table->integer('id_location');
            $table->integer('id_category');
            $table->date('acquired_date');
            $table->string('description')->nullable();

            $table->foreign('cat_code')
                  ->references('cat_code')
                  ->on('specification')
                  ->onDelete('cascade');

            $table->foreign('id_location')
                  ->references('id_location')
                  ->on('location')
                  ->onDelete('cascade');

            $table->foreign('id_category')
                  ->references('id_category')
                  ->on('category')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};