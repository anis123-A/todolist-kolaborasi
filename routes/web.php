<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Jalur untuk menampilkan data (Read)
Route::get('/', [Controller::class, 'index'])->name('tasks.index');

// Jalur untuk menghapus data (Delete)
Route::delete('/tasks/{id}', [Controller::class, 'destroy'])->name('tasks.destroy');
