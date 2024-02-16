<?php

use App\Livewire\BuatTask;
use App\Livewire\Contact;
use App\Livewire\Task;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', Task::class)->name('home');
Route::get('/buat', BuatTask::class)->name('buat.task');
Route::get('/contact', Contact::class)->name('contact');


// Route::get('/buat', )->('buat.task')