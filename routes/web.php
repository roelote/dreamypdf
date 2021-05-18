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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if(Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('auth.login');
    }
});

//rutas crud

Route::get('/programa', 'ProgramaController@index')->name('programa.home');
Route::get('/programa/crear', 'ProgramaController@create')->name('programa.create');
Route::post('/programa', 'ProgramaController@store')->name('programa.store');
Route::get('/programa/{id}/edit', 'ProgramaController@edit')->name('programa.edit');
Route::patch('/programa/{id}', 'ProgramaController@update')->name('programa.update');

//ruta generar pdf

//hoteles de pdf
Route::get('/hotelpdf', 'HotelpdfController@index')->name('hotelpdf.home');
Route::get('/hotelpdf/crear', 'hotelpdfController@create')->name('hotelpdf.create');
Route::post('/hotelpdf', 'hotelpdfController@store')->name('hotelpdf.store');


Route::get('/programapdf/{id}', 'ProgramaController@exportPdf')->name('programa.pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
