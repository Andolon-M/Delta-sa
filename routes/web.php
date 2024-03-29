<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemaController;
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

Route::post('/set-theme', [TemaController::class, 'setTheme'])->name('set-theme');


Route::get('/proyectos/ing/civil', [\App\Http\Controllers\ProfectosCivilesPageController::class, 'index'])->name('proyectos/ing/civil');
Route::get('/proyectos/ing/electrica', [\App\Http\Controllers\ElectricalProyectPageController::class, 'index'])->name('proyectos/ing/electrica');
Route::get('/formaleta-metalica', [\App\Http\Controllers\formaletaMetalicaController::class, 'index'])->name('formaleta-metalica');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('civil-projects', \App\Http\Controllers\CivilProjectController::class);
    Route::resource('electrical-projects', \App\Http\Controllers\ElectricalProjectController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
