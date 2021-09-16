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

    public function submitPost(Request $request, Page $page)
    {
        Task::query()->create([
            'name' => $request->input('hello'),
            'page_id' => 1
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
