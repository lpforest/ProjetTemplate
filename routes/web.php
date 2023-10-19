<?php

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
    return view('home');
});

Route::get('/listerOeuvres',[\App\Http\Controllers\OeuvresController::class, 'ListerOeuvres']);
Route::get('/listerVisiteurs',[\App\Http\Controllers\VisiteurController::class, 'ListerVisiteurs']);
Route::get('/listerTickets',[\App\Http\Controllers\TicketsController::class, 'ListerTickets']);

Route::get('/ajouterOeuvres',[\App\Http\Controllers\OeuvresController::class, 'addOeuvre']);

