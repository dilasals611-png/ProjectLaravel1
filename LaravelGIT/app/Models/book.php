<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class book extends Model
{
    protected $fillable = [
        'kategori_id',
        'judul',
        'isbn',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'stok',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function pinjamans(): HasMany
    {
        return $this->hasMany(pinjaman::class, 'buku_id');
    }
}