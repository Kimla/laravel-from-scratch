<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) {
        return view('tasks.show', compact('task'));
    }

    public function incomplete() {
        $tasks = Task::incomplete()->get();

        return $tasks;
    }

    public function complete() {
        $tasks = Task::complete()->get();

        return $tasks;
    }
}
