<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\ProdutosController;

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
    return view('home.index');
})->name('home');

Route::name('computadores.')->prefix('computadores')->controller(ComputadorController::class)->group(function () {
    Route::get('/list', 'list')->name('list');
    Route::get('/{computador}/show', 'show')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::get('/{computador}/edit', 'edit')->name('edit');
    Route::post('/store', 'store')->name("store");
    Route::put('/{computador}/update', 'update')->name("update");
    Route::delete('/{computador}/delete', 'destroy')->name('delete');
});

Route::resources(["produtos" => ProdutosController::class]);
