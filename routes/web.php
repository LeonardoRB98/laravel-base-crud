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

// resource() richiama il controller cruds completo
// il metodo accetta 2 paramentri: tabella server  , 'controller'
Route::resource('beers','BeerController');

// Route::get('/beers', 'BeersControler@index')->('beers.index');