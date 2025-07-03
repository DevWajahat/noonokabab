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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('phone');
            $table->time('time');
            $table->date('schedule');
            $table->string('type');
            $table->string('delivery_address')->nullable();
            $table->string('Floor')->nullable();
            $table->float('sub_total');
            $table->float('total');
            $table->string('discount_code')->nullable();
            $table->float('discount_price');
            $table->string('pickup_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
