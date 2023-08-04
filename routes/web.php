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



Route::get('/administrador/dashboard','App\Http\Controllers\MicrositiosController@dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/{url}','App\Http\Controllers\MicrositiosController@micrositio');


Route::get('/administracion/register', function () {
    return view('auth/register-director');
})->name("register-director");

Route::get('/usuarios/register', function () {
    return view('auth/register-user');
})->name("register-user");

Route::get('/micrositio/dowload/{id}','App\Http\Controllers\MicrositiosController@vcardDescarga')->name('vcardDescarga');
Route::get('/micrositio/editar/{id}','App\Http\Controllers\MicrositiosController@micrositioEditar');
Route::post('/micrositio/editar','App\Http\Controllers\MicrositiosController@editDirector')->name('editDirector');

Route::post('/sendmail','App\Http\Controllers\MicrositiosController@sendMail')->name('sendMail');

Route::post('/register-director','App\Http\Controllers\MicrositiosController@registerDirector')->name('registerDirector');

require __DIR__.'/auth.php';
