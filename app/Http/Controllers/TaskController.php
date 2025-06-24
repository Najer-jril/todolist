<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('category')->orderBy('due_date', 'asc')->get();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'due_date' => 'nullable|date',
            'priority' => 'nullable|in:High,Medium,Low',
            'status' => 'required|in:pending,completed',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = array_merge($validated, [
            'user_id' => Auth::id(),
            // 'completed_at' => $request->status === 'completed' ? now() : null,
        ]);

        Task::create($data);

        return redirect()->route('tasks.index')->with('success', 'Tugas baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //dd($task->all());
        $task->load('category');

        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $categories = Category::all();

        return view('tasks.edit', compact('task', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'priority' => 'nullable|in:high,medium,low',
            'status' => 'required|in:pending,in progress,completed',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = $request->all();
        if ($request->status === 'completed' && is_null($task->completed_at))
        {
            $data['completed_at'] = now();
        } elseif ($request->status !== 'completed')
        {
            $data['completed_at'] = null;
        }

        $task->update($data);

        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil dihapus.');
    }
}
