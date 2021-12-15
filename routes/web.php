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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'ReservationController@index');

//Route::get('/home', 'ReservationController@index')->name('home');

Route::resource('reservation','ReservationController')->except(['destroy']); // creare tutte le rotte per il CRUD di una risorsa tranne la destroy (except per evitare i conflitti)

Route::resource('reservationowner','ReservationOwnerController')->except(['destroy']); // creare tutte le rotte per il CRUD di una risorsa tranne la destroy (except per evitare i conflitti)

Route::get('/reservation/{reservation}/delete', 'ReservationController@destroy'); 

Route::resource('event','EventController');

//Route::get('/review/create', 'ReviewController@index')->name('create');

Route::resource('review','ReviewController')->except(['destroy']);// creare tutte le rotte per il CRUD di una risorsa tranne la destroy (except per evitare i conflitti)

Route::get('/review/{review}/delete', 'ReviewController@destroy'); 

Route::view('menus','menus'); 

Route::view('aboutus','aboutus'); 

Route::resource('users','UserController')->except(['destroy']);

Route::get('/user/{user}/delete', 'UserController@destroy'); 


