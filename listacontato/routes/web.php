<?php

use App\Http\Controllers\ContatoController;
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
    return view('welcome');
});

Route::controller(ContatoController::class)->group(function(){

   // Route:: get('/', 'Index')->name('usuario.index');

    Route:: get('/contato', 'Index')->name('contato.index');
    Route:: get('/criar','create') ->name('contato.create');
    Route:: post('/criar/salvar','store')->name('contato.stores');
    Route:: get('/contato/ver/{id}','show')->name('contato.show');
    Route:: get('/contato/edit/{id}','edit')->name('contato.edit');
    Route:: put('/contato/update','update')->name('contato.update');
    Route:: post('/contato/destroy/{id}','destroy')->name('contato.destroy');



});
