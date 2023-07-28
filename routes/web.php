<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VehiculeController;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Auth;
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
    return view('Template');
});

// Route::get('/form', [NouveauController::class, 'afficher']);
// Route::get('/recup', [NouveauController::class, 'recup']);
// Route::get('/form1', [NouveauController::class, 'afficherf1']);
// Route::get('/form2', [NouveauController::class, 'afficherf2']);
// Route::get('/form3', [NouveauController::class, 'afficherf3']);

Route::resource('vehicule',VehiculeController::class);
Route::resource('utilisateur',UtilisateurController::class);
Route::resource('bien',BienController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
