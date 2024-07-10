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
        Schema::create('card_task', function (Blueprint $table) {
            $table->id('task_id');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('table_record_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('status', 50)->nullable();
            $table->integer('priority')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->timestamps(); // Includes both created_at and updated_at

            // Foreign key constraints
            $table->foreign('owner_id')->references('user_id')->on('users');
            $table->foreign('table_id')->references('table_id')->on('table');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_task');
    }
};
