<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class Controller extends \Illuminate\Routing\Controller
{
    // --- TUGAS SALMIA (READ) ---
    public function index()
    {
        $tasks = Task::all(); 
        return view('tasks', compact('tasks'));
    }

    // --- TUGAS SALMIA (DELETE) ---
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }

    // --- TUGAS ANNIS (CREATE)
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'task_name' => 'required|max:255',
        ]);

        // Simpan data baru ke database
        Task::create([
            'task_name' => $request->task_name,
            'is_completed' => false,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan!');
    }
}