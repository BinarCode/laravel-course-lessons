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

Route::get('/', 'SushiController@index');

/*Route::get('/', function () {
    $ingredient = request('ingredient');

    return view('welcome', [
        'ingredient' => $ingredient,
    ]);
});*/

Route::view('about', 'about');

Route::view('article', 'article');
