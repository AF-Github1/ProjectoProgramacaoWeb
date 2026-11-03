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
        Schema::create('rental_record', function (Blueprint $table) {
            $table->integer('id_record')->autoIncrement();
            $table->integer('id_user');
            $table->string('order_status');
            $table->date('rental_date');
            $table->date('return_date')->nullable();
            $table->date('max_return_date');
            $table->decimal('price', 10, 2)->nullable();
            $table->string('description')->nullable();

            $table->foreign('id_user')
                  ->references('id_user')
                  ->on('client')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_record');
    }
};