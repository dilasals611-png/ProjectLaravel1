<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

//route atau alamat untuk buka form
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

//route untuk memproses inputan form
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

//di file create ubah action
//---> <form action="{{route('items.store') }}" method="POST">
