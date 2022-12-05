<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GanaderoController;
use App\Http\Controllers\GanadoController;
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

Route::get('/ganados', [GanadoController::class, 'index']);
Route::get('/ganados/crear', [GanadoController::class, 'create']);
Route::post('/ganados/crear', [GanadoController::class, 'store']);
Route::get('/ganados/ver/{id}', [GanadoController::class, 'show']);
Route::get('/ganados/editar/{id}', [GanadoController::class, 'edit']);
Route::put('/ganados/editar/{id}',  [GanadoController::class, 'update']);
Route::get('/ganados/eliminar/{id}', [GanadoController::class, 'destroy']);

    
    Route::get('/ganaderos', [GanaderoController::class, 'index']);
Route::get('/ganaderos/crear', [GanaderoController::class, 'create']);
Route::post('/ganaderos/crear', [GanaderoController::class, 'store']);
Route::get('/ganaderos/ver/{id}', [GanaderoController::class, 'show']);
Route::get('/ganaderos/editar/{id}', [GanaderoController::class, 'edit']);
Route::put('/ganaderos/editar/{id}',  [GanaderoController::class, 'update']);
Route::get('/ganaderos/eliminar/{id}', [GanaderoController::class, 'destroy']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
