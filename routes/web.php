<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\ImportPieceDetaillerController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\PiecesController;
use App\Http\Controllers\RealisationCategorieController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WebsiteController;


// Website Route
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/pieces_engin', [WebsiteController::class, 'eshop']);
Route::get('/reparation', [WebsiteController::class, 'reparation']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/filtrer-pieces',  [WebsiteController::class, 'filtrerPieces'])->name('filtrer-pieces');


// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Action de l'agent
Route::middleware(['auth'])->group(function() {
    Route::resource('engin', EnginController::class);
    Route::resource('pieces', PiecesController::class);
    Route::resource('marques', MarquesController::class);
    Route::resource('categorie_realisation', RealisationCategorieController::class);
    Route::resource('realisations', RealisationController::class);
    Route::resource('temoignages', TestimonialsController::class);

});

Route::get('import', function(){
    return view('import');
});

Route::post('/import',[ImportPieceDetaillerController::class, 'import'])->name('import');

// Auth::routes();
