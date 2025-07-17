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
        Schema::create('menu_order_sideline', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_order_id')->constrained('menu_order');
            $table->string('name');
            $table->string('option');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_order_sideline');
    }
};
