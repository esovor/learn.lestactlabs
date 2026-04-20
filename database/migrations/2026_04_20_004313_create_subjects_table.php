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
        Schema::create('subjects', function (Blueprint $table) {
            $table->integer('sequence_number')->unique();
            $table->string('subject_id')->primary();
            $table->string('class_level_id');
            $table->foreign('class_level_id')->references('class_level_id')->on('class_levels')->cascadeOnDelete();
            $table->string('name')->index();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
