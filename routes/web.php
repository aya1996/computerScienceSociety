<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('send-message', [App\Http\Controllers\ContactController::class, 'store'])->name('send-message');
Route::get('profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile')->middleware('auth');
Route::put('profile_updates/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('profile_updates')->middleware('auth');
Route::put('change_password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('change_password')->middleware('auth');
Route::get('all-blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('all-blogs');
Route::get('single-blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('single-blog');
Route::get('create-table', [App\Http\Controllers\TableController::class, 'index'])->name('create-table')->middleware('auth');
Route::post('get-courses', [App\Http\Controllers\TableController::class, 'getCourses'])->name('get-courses');
Route::post('get-colleges', [App\Http\Controllers\TableController::class, 'getColleges'])->name('get-colleges');
Route::post('get-teachers', [App\Http\Controllers\TableController::class, 'getTeachers'])->name('get-teachers');
Route::post('table-store', [App\Http\Controllers\TableController::class, 'store'])->name('table-store')->middleware('auth');;
Route::get('my-table', [App\Http\Controllers\TableController::class, 'getTable'])->name('my-table')->middleware('auth');;
Route::get('delete-schedule/{id}', [App\Http\Controllers\TableController::class, 'deleteSchedule'])->name('delete-schedule')->middleware('auth');;

