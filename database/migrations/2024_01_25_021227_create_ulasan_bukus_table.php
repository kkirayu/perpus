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
        Schema::create('ulasan_bukus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('BukuID');
            $table->foreign('BukuID')->references('id')->on('bukus')->onDelete('cascade');
            $table->longText('Ulasan');
            $table->string('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan_bukus');
    }
};
