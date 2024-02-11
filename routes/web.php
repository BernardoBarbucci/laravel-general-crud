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
Route::get('/', function () {
    return view('pokedex.home');
})->name('pokedex.home');

Route::get('/pokedex', [PokedexController::class, 'index']);

// route per create
Route::get('/pokedex/create', [PokedexController::class, 'create'])->name('pokedex.create');
Route::post('/pokedex', [PokedexController::class, 'store'])->name('pokedex.store');


// route per delete
Route::get('pokedex', [PokedexController::class, 'index'])->name('pokedex.index');
Route::delete('pokedex/{pokemon}', [PokedexController::class, 'destroy'])->name('pokedex.destroy');  
Route::get('/pokedex/{id}', [PokedexController::class, 'show'])->name('pokedex.show');

// route per edit
Route::get('pokedex/{pokedex}/edit', [PokedexController::class, 'edit'])->name('pokedex.edit');

// route per upfate
Route::put('pokedex/{pokedex}', [PokedexController::class, 'update'])->name('pokedex.update');
