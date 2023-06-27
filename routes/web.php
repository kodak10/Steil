<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\PiecesController;

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

Route::get('/pieces', function () {
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


Route::resource('engin', EnginController::class);
Route::get('/engin/categorie/create', [App\Http\Controllers\EnginController::class, 'create_categorie']);
Route::get('/engin/categorie/list', [App\Http\Controllers\EnginController::class, 'liste_categorie']);
Route::get('/engin/categorie/{id}/edit', [App\Http\Controllers\EnginController::class, 'edit_categorie']);



Route::resource('pieces', PiecesController::class);
Route::get('/pieces/categorie/create', [App\Http\Controllers\PiecesController::class, 'create_categorie']);
Route::get('/pieces/categorie/list', [App\Http\Controllers\PiecesController::class, 'liste_categorie']);
Route::get('/pieces/categorie/{id}/edit', [App\Http\Controllers\PiecesController::class, 'edit_categorie']);


