<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    function show(Task $task) {
        return view('tasks.show', compact('task'));
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $req) {
        $task = new Task();
        $task->task_name = $req->input('task_name');
        $task->year = $req->input('year');
        $task->month = $req->input('month');
        $task->day = $req->input('day');
        $task->memo = $req->input('memo');
        $task->save();

        return redirect()->route('tasks.show', $task);
    }

    public function edit(Task $task) {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $req, Task $task) {
        $task->task_name = $req->input('task_name');
        $task->year = $req->input('year');
        $task->month = $req->input('month');
        $task->day = $req->input('day');
        $task->memo = $req->input('memo');
        $task->done = $req->input('done');
        $task->save();

        return redirect()->route('tasks.show', $task);
    }
}
