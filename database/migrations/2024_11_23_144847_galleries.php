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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('link'); // Link ke galeri (misalnya URL atau path file)
            $table->string('title'); // Judul galeri
            $table->text('description'); // Deskripsi galeri
            $table->date('date'); // Tanggal galeri
            $table->enum('type', ['foto', 'video', 'comic', 'podcast'])->default('video');// Tanggal galeri
            $table->timestamps(); // Created at dan updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
