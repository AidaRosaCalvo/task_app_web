<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('task.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_field' => 'required|string|max:255',
        ]);
        Task::create([
            'name' => $request->name_field,
            //          'done' => false,
        ]);
        return redirect()->route('tasks.index');
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'done' => $request->has('chbx_done'),
        ]);
        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function show($id){
        $task = Task::findOrFail($id);
        return view('task.detail')->with('task',$task);
    }
}
