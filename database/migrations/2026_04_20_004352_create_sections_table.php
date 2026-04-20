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
        Schema::create('sections', function (Blueprint $table) {
            $table->integer('sequence_number')->unique();
            $table->string('section_id')->primary();
            $table->string('sub_strand_id');
            $table->foreign('sub_strand_id')->references('sub_strand_id')->on('sub_strands')->cascadeOnDelete();
            $table->string('name')->unique()->index();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
