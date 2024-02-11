<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPokedexController as PokedexController;

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

Route::get('/', [PokedexController::class, 'index']);

// route per create
Route::get('/pokedex/create', [PokedexController::class, 'create'])->name('pokedex.create');
Route::post('/pokedex', [PokedexController::class, 'store'])->name('pokedex.store');
Route::get('/pokedex/{id}', [PokedexController::class, 'show'])->name('pokedex.show');
