<?php

use App\Models\Page;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tasks',[
        'tasks' => Task::all()
    ]);
});
Route::get('/{page:name}', function (Page $page) {
    return view('task',[
        'page' => $page
    ]);
});
