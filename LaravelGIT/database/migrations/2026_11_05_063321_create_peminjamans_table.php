<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel books
            $table->foreignId('buku_id')->constrained('books')->onDelete('cascade');
            
            // Relasi ke tabel users (yang minjem)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->integer('jumlah')->default(1);
            $table->enum('status', ['dipinjam', 'dikembalikan', 'terlambat'])->default('dipinjam');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};