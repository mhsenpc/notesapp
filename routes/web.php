<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PushController;
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


Route::get('/', [\App\Http\Controllers\NoteController::class, 'index'])->name('notes');
Route::post('notes/store', [\App\Http\Controllers\NoteController::class, 'store'])->name('notes.store');
Route::delete('notes/{note}/delete', [\App\Http\Controllers\NoteController::class, 'destroy'])->name('notes.destroy');
