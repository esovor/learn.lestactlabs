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
        Schema::create('sub_strands', function (Blueprint $table) {
            $table->integer('sequence_number')->unique();
            $table->string('sub_strand_id')->primary();
            $table->string('strand_id');
            $table->foreign('strand_id')->references('strand_id')->on('strands')->cascadeOnDelete();
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
        Schema::dropIfExists('sub_strands');
    }
};
