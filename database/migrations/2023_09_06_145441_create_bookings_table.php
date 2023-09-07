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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('slot_id');
            $table->timestamps();

            $table->foreign('classes_id')->references('id')->on('classes')->cascadeOnDelete();
            $table->foreign('slot_id')->references('id')->on('slots')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
