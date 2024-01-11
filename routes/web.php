<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\EmployeeController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('post', [HomeController::class, 'post'])->middleware('auth', 'admin');

Route::get('add', [HomeController::class, 'add'])->middleware('auth', 'admin');


Route::get('/add', [EmployeeController::class, 'create'])->middleware('auth', 'admin')->name('pages.add');
Route::post('/add', [EmployeeController::class, 'store'])->middleware('auth', 'admin')->name('pages.add');



Route::get('/home', [EmployeeController::class, 'datalist'])->middleware('auth', 'admin')->name('home');

Route::get('/single-employee/{id}', [EmployeeController::class, 'show'])->middleware('auth');


Route::get('/edit-employee/{id}/edit', [EmployeeController::class, 'edit'])->middleware('auth');
Route::put('/edit-employee/{id}/edit', [EmployeeController::class, 'update'])->middleware('auth');


Route::post('/delete-employee/{id}/delete', [EmployeeController::class, 'destroy']);

require __DIR__.'/auth.php';
