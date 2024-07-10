<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'taskList'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';

Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/tasklist', [App\Http\Controllers\TaskListController::class, 'taskList'])->name('user.tasklist');
    Route::get('/table', [App\Http\Controllers\TableController::class, 'taskList'])->name('user.table');
    Route::get('/search_task', [App\Http\Controllers\TaskListController::class, 'search'])->name('search_task');
    Route::get('/add_task', [App\Http\Controllers\TaskListController::class, 'addTask'])->name('add_task');
    Route::post('/store_task', [App\Http\Controllers\TaskListController::class, 'storeTask'])->name('store_task');
    Route::delete('/tasks/{task_id}', [App\Http\Controllers\TaskListController::class, 'destroy'])->name('destroy_task');
    Route::get('/update_form_task/{task_id}', [App\Http\Controllers\TaskListController::class, 'formUpdate'])->name('update_form_task');
    Route::post('/update_task/{task_id}', [App\Http\Controllers\TaskListController::class, 'update'])->name('update_task');
    Route::get('/search_table', [App\Http\Controllers\TableController::class, 'search'])->name('search_table');


});


