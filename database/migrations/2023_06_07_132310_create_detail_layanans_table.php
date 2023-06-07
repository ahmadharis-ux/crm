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
        Schema::create('detail_layanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->unsigned();
            $table->string('nama');
            $table->integer('harga_satuan');
            $table->string('kertas')->nullable();
            $table->string('ukuran')->nullable();
            $table->timestamps();

            $table->foreign('layanan_id')->references('id')->on('layanans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_layanans');
    }
};
