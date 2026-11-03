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
        Schema::create('order', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('user');
            $table->integer('technician')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('id_record');

            $table->foreign('user')
                  ->references('id_user')
                  ->on('client')
                  ->onDelete('cascade');

            $table->foreign('technician')
                  ->references('id_technician')
                  ->on('technician')
                  ->onDelete('set null');

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
        Schema::dropIfExists('order');
    }
};