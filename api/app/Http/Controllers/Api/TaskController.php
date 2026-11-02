<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return response()->json($tasks, 200);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
 
        return response()->json($task, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'sometimes|in:pending,completed',
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullble|string',
            'status' => 'sometimes|in:pending,completed'
        ]);

        $task->update($validated);

        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return response()->json(null, 204);
    }

}
