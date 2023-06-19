<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return redirect('/tareas');
});

Route::get('/tareas', function () {
    return view('todo.index');
});

Route::get('/tareas', [TodoController::class, 'index'])->name('/');
Route::post('/tareas', [TodoController::class, 'store'])->name('/');
Route::get('/tareas/{id}', [TodoController::class, 'show'])->name('todos-show');
Route::patch('/tareas/{id}', [TodoController::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}', [TodoController::class, 'destroy'])->name('todos-destroy');

Route::resource('categories', CategoriesController::class);