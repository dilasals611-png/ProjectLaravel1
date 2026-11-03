<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //kita masukkan tabel yang digunakan
    protected $table = 'items';

    //kolom-kolom yang diizinkan untuk diisi lewat folder
    protected $fillable = [
        'code',
        'items_name',
        'category',
        'stock',
        'condition',
        'room_location',
     ];
}
