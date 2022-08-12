<?php

use App\Http\Livewire\TodoList;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TodoCreate;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/todos/create", TodoCreate::class)->name("todos.create");

Route::get("/todos", TodoList::class)->name("todos");
