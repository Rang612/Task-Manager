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
        Schema::create('table', function (Blueprint $table) {
            $table->id('table_id');
            $table->unsignedBigInteger('owner_id');
            $table->string('table_name');
            $table->timestamps(); // Includes both created_at and updated_at

            // Foreign key constraint
            $table->foreign('owner_id')->references('user_id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
