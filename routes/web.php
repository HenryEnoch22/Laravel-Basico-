<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PagesController;


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

//MODO CLÁSICO
//Route::get('/bienvenido', function (){
//    return view('home');
//})->name('home');


//MODO CLÁSICO
//Route::get('/contactame', function (){
//    return view('contactos');
//})->name('contactos');

//Route::get('contactame', [PagesController::class, 'contact'])->name('contacto');


//MODO CLASICO
//Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado'){
//
//    return view('saludo', compact('nombre'));
//
//})->name('saludo');

//Route::get('mensajes/create', [MessagesController::class, 'create'])
//    ->name('messages.create');
//
//Route::get('mensajes', [MessagesController::class, 'index'])
//    ->name('messages.index');
//
//Route::post('mensajes', [MessagesController::class, 'store'])
//    ->name('messages.store');
//
//Route::get('mensajes/{id}', [MessagesController::class, 'show'])
//    ->name('messages.show');
//
//Route::get('mensajes/{id}/edit', [MessagesController::class, 'edit'])
//    ->name('messages.edit');
//
//Route::put('mensajes/{id}', [MessagesController::class, 'update'])
//    ->name('messages.update');
//
//Route::delete('mensajes/{id}', [MessagesController::class, 'destroy'])
//    ->name('messages.destroy');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/bienvenido', [PagesController::class, 'home'])->name('home');

    Route::get('contacto', [MessagesController::class, 'create'])->name('contacto');

    Route::get('/saludo/{nombre?}', [PagesController::class, 'saludo'])->name('saludo');

    Route::resource('mensajes', MessagesController::class);

    Route::resource('usuarios', UsersController::class);

});
