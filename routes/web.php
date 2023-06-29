<?php

use App\Http\Controllers\EnginCategorieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\PieceCategorieController;
use App\Http\Controllers\PiecesController;
use App\Http\Controllers\RealisationCategorieController;
use App\Http\Controllers\RealisationController;
use App\Models\Temoignage;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pieces_engin', function () {
    return view('pieces');
});

Route::get('/reparation', function () {
    return view('reparation');
});

// Route::get('/login/admin', function () {
//     return view('auth.login');
// });

Route::get('/login/admin', function () {
    return view('dashboard.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categorie_engin', EnginCategorieController::class);
Route::resource('categorie_piece', PieceCategorieController::class);
Route::resource('engin', EnginController::class);
Route::resource('pieces', PiecesController::class);
Route::resource('marques', MarquesController::class);


Route::resource('categorie_realisation', RealisationCategorieController::class);


Route::resource('realisations', RealisationController::class);



Route::resource('temoignages', Temoignage::class);









