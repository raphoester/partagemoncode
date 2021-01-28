<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/profil/modification', [App\Http\Controllers\ProfilController::class, 'page_modif_profil']);

    Route::post('/profil/modification', [App\Http\Controllers\ProfilController::class, 'updateprofil']);

    Route::get('/profil/{id}', [App\Http\Controllers\ProfilController::class, 'profil']);

    Route::get('/pages', [App\Http\Controllers\CodeController::class, 'liste']);

    Route::get('/edition/{id}',[App\Http\Controllers\CodeController::class, 'edit']);

    Route::post('/edition/{id}', [App\Http\Controllers\CodeController::class, 'maj_pdc']);
    
    Route::get('/creerPage', [App\Http\Controllers\CodeController::class, 'creer']);

    Route::delete('/supprimer/{id}', [App\Http\Controllers\ProfilController::class, 'delete']);

    Route::post('/creerPage', [App\Http\Controllers\CodeController::class, 'creer_post']);


});






