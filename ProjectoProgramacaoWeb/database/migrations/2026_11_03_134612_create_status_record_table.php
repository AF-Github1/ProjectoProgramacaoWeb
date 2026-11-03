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
        Schema::create('status_record', function (Blueprint $table) {
            $table->integer('id_status_record')->autoIncrement();
            $table->integer('pin');
            $table->string('status');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->string('reason')->nullable();

            $table->foreign('pin')
                  ->references('pin')
                  ->on('equipment')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_record');
    }
};