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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unsigned();
            $table->integer('subtotal');
            $table->foreignId('diskon_id')->nullable();
            $table->integer('total');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('diskon_id')->references('id')->on('program_diskons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
