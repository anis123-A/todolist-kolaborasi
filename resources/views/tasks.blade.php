<!DOCTYPE html>
<html>
<head>
    <title>TodoList Kolaborasi - Annis & Salmia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center text-blue-600">Todo List</h1>

        <!-- Form Tambah (Annis) -->
        <form action="{{ route('tasks.store') }}" method="POST" class="flex mb-4">
            @csrf
            <input type="text" name="task_name" placeholder="Tambah tugas..." 
                   class="flex-1 border rounded-l px-4 py-2 focus:outline-none" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Tambah</button>
        </form>

        <!-- Daftar Tugas (Salmia) -->
        <ul>
            @foreach($tasks as $task)
                <li class="flex justify-between items-center border-b py-2 text-gray-700">
                    <span>{{ $task->task_name }}</span>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>