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
        Schema::create('specification', function (Blueprint $table) {
            $table->integer('cat_code')->primary();
            $table->string('name');
            $table->decimal('weight', 10, 2);
            $table->string('consumption_type');
            $table->string('description')->nullable();
            $table->string('brand');
            $table->string('dimension');
            $table->decimal('time_price', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specification');
    }
};