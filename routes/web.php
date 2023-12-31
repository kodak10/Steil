<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\PiecesController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ImportPieceDetaillerController;
use App\Http\Controllers\RealisationCategorieController;


// Website Route
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/pieces_engin', [WebsiteController::class, 'eshop']);
Route::get('/pieces_engin/{categorie}', [WebsiteController::class, 'search_cat'])->name('search_categorie');
Route::get('/pieces_engin', [WebsiteController::class, 'search']  )->name('recherche');

Route::get('/reparation', [WebsiteController::class, 'reparation']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [WebsiteController::class, 'send_mail'])->name('mail');


Route::get('/filtrer-pieces',  [WebsiteController::class, 'filtrerPieces'])->name('filtrer-pieces');


// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'] )->name('login');
Route::post('login', [LoginController::class, 'login'] );
Route::post('logout', [LoginController::class, 'logout'] )->name('logout');

Route::get('/home',[HomeController::class, 'index'])->name('home');

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
