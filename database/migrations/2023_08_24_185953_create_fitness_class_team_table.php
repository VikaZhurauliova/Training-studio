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
        Schema::create('fitness_class_team', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fitness_class_id')->nullable();
            $table->foreign('fitness_class_id')->references('id')->on('fitness_class')->cascadeOnDelete();

            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('team')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitness_class_team');
    }
};
