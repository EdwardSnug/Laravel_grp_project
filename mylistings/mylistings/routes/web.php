<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
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

Route::get('/todolist', [TodolistController::class, 'index'])->name('todolist.index');
Route::get('/todolist/create', [TodolistController::class, 'create'])->name('todolist.create');
Route::post('/todolist', [TodolistController::class, 'store'])->name('todolist.store');
Route::get('/todolist/mytasks', [TodolistController::class, 'mytasks'])->name('todolist.mytasks');
Route::get('/todolist/{todolist}/edit', [TodolistController::class, 'edit'])->name('todolist.edit');
Route::put('/todolist/{todolist}/update', [TodolistController::class, 'update'])->name('todolist.update');
Route::delete('/todolist/{todolist}/destroy', [TodolistController::class, 'destroy'])->name('todolist.destroy');
Route::get('/todolist/irrelevant', [TodolistController::class, 'irrelevant'])->name('todolist.irrelevant');