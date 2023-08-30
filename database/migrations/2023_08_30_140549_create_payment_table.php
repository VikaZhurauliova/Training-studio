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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->string('session_id')->nullable();
            $table->string('status')->nullable();
            $table->string('hash')->nullable();

            $table->foreign('subscription_id')->references('id')->on('subscriptions')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
