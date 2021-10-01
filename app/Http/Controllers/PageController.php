<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Task;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showAll()
    {
        return view('home', [
            'pages' => Page::all()
        ]);
    }
    public function showTasks(Page $page)
    {
        return view('task', [
            'pages' => Page::all(),
            'currentPage' => $page,
        ]);
    }

    public function submitPage(Request $request)
    {
        Page::query()->create([
            'name' => $request->input('hello')
        ]);

        return redirect()->back();
    }

    public function submitTask(Request $request, int $pageId)
    {
        $task = new Task((['name' => $request->input('hello'), 'status' => 'X']));
        $page =  Page::findOrFail($pageId);
        $page->tasks()->save($task);

        return redirect()->back();
    }

    public function delete($id)
    {
        $toDelete = Page::findOrFail($id);
        $toDelete->delete();
        return redirect()->back();
    }
}
