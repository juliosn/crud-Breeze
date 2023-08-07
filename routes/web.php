<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//C
Route::get('/register-client', [ClientController::class, 'create'])->middleware(['auth'])->name('client.register');

Route::post('/register-client', [ClientController::class, 'store'])->middleware(['auth']);

//R
Route::get('/list-clients', [ClientController::class, 'list'])->middleware(['auth'])->name('client.list');

//U
Route::get('/edit-client/{client}', [ClientController::class, 'edit'])->middleware(['auth'])->name('client.edit');

Route::patch('/edit-client/{client}', [ClientController::class, 'update'])->middleware(['auth'])->name('client.update');

//D
Route::delete('/list-clients/{client}', [ClientController::class, 'destroy'])->middleware(['auth'])->name('client.destroy');
