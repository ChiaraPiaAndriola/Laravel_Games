<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

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
//rotta home
Route::get('/', [PublicController::class, 'home'])->name('home');

//rotta get per la visualizzazione del form
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');

//rotta post per la visualizzazione del form
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');

//Rotta per la pagina dei giochi
Route::get('/games', [GameController::class, 'index'])->name('index.games');
//Rotta per il dettaglio
Route::get('/detail/games, {data}', [GameController::class, 'show'])->name('show.games');

//Rotta get per la modifica
Route::get('/game/edit/{data}', [GameController::class, 'edit'])->name('edit.game');
//Rotta put per la modifica
Route::put('/game/update/{data}', [GameController::class, 'update'])->name('update.game');

//Rotta per eliminare un record
Route::delete('/game/delete/{data}', [GameController::class, 'destroy'])->name('destroy.game');

//Rotta get per form per contatti
Route::get('/contact-us', [PublicController::class, 'form'])->name('form');
//Rotta post per form per contatti
Route::post('/contact-email', [PublicController::class, 'sendEmail'])->name('send.email');

//Rotta per filtrare categoria con categoria 1-N
Route::get('/game/category/{category}', [GameController::class, 'filterByCategory'])->name('game.filterByCategory');

//Rotta per filtrare consoles
Route::get('/game/console/{console}', [GameController::class, 'filterByConsole'])->name('game.filterByConsole');




