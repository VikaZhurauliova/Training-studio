<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->decimal('protein', 8, 2)->after('calories')->nullable();
            $table->decimal('carbohydrates', 8, 2)->after('protein')->nullable();
            $table->decimal('fat', 8, 2)->after('carbohydrates')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->dropColumn(['protein', 'carbohydrates', 'fat']);
        });
    }
};
