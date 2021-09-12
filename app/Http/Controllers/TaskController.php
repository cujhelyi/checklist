<?php

namespace App\Http\Controllers;

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

    public function submitPost(Request $request)
    {
        Task::query()->create([
            'name' => $request->input('hello'),
            'page' => 'main'
        ]);

        return redirect()->back();
    }
    public function delete($id)
    {
        $toDelete = Task::findOrFail($id);
        $toDelete->delete();
        return redirect()->back();
    }
}
