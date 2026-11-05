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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Relasi ke tabel categories
        $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
        $table->string('judul');
        $table->string('isbn')->unique();
        $table->string('penulis');
        $table->string('penerbit');
        $table->integer('tahun_terbit');
        $table->integer('stok')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
