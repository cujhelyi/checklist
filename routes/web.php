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

Route::get('/', [\App\Http\Controllers\PageController::class, 'showAll']);
//Route::get('/{page:name}', function (Page $page) {
//    return view('task',[
//        'page' => $page
//    ]);
//});
Route::get('/{page:name}', [\App\Http\Controllers\PageController::class, 'showTasks']);
Route::get('/deleteTask/{id}', [\App\Http\Controllers\TaskController::class, 'delete']);
Route::get('/deletePage/{id}', [\App\Http\Controllers\PageController::class, 'delete']);
Route::post('/newPage', [\App\Http\Controllers\PageController::class, 'submitPost']);
Route::post('/newTask', [\App\Http\Controllers\TaskController::class, 'submitPost']);
