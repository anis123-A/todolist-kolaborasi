<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Jalur untuk menampilkan data (Tugas Salmia)
Route::get('/', [Controller::class, 'index'])->name('tasks.index');

// Jalur untuk menyimpan data (Tugas Annis)
Route::post('/tasks', [Controller::class, 'store'])->name('tasks.store');

// Jalur untuk menghapus data (Tugas Salmia)
Route::delete('/tasks/{id}', [Controller::class, 'destroy'])->name('tasks.destroy');