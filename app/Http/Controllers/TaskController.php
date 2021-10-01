<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showAll()
    {
        return view('Task', [
            'tasks' => Task::all()
        ]);

    }

    public function updateStatus(Request $request): \Illuminate\Http\RedirectResponse
    {
        $task = Task::findOrFail($request->submit);
        $task->status === 'X'? $task->status = '✔': $task->status = 'X';
        $task->save();

        return redirect()->back();

    }
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $toDelete = Task::findOrFail($id);
        $toDelete->delete();
        return redirect()->back();
    }
}
