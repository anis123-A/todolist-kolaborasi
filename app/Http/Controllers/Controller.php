<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class Controller extends \Illuminate\Routing\Controller
{
    // --- TUGAS SALMIA (READ): Menampilkan semua tugas ---
    public function index()
    {
        // Mengambil semua data dari tabel tasks
        $tasks = Task::all(); 
        
        // Menampilkan ke file resources/views/tasks.blade.php
        return view('tasks', compact('tasks'));
    }

    // --- TUGAS SALMIA (DELETE): Menghapus tugas ---
    public function destroy($id)
    {
        // Cari data berdasarkan ID dan hapus
        $task = Task::findOrFail($id);
        $task->delete();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}