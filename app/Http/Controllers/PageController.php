<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showAll()
    {
        return view('home', [
            'pages' => Page::all()
        ]);
    }

    public function submitPost(Request $request)
    {
        Page::query()->create([
            'name' => $request->input('hello')
        ]);

        return redirect()->back();
    }
    public function delete($id)
    {
        $toDelete = Page::findOrFail($id);
        $toDelete->delete();
        return redirect()->back();
    }
}
