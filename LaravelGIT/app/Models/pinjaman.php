<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pinjaman extends Model
{
    use HasFactory;

    // Karena nama tabel kamu peminjamans, kasih tau Laravel
    protected $table = 'peminjamans';

    protected $fillable = [
        'buku_id',
        'user_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'status'
    ];

    // Relasi ke buku - ini yang penting
    public function buku()
    {
        return $this->belongsTo(book::class, 'buku_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}