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

Route::resource('sushi', 'SushiController');

Route::view('/about', 'about');

Route::get('/profile', 'AuthController@profile')->middleware('auth');

Route::get('/register', 'AuthController@register');

Route::get('/login', 'AuthController@login')->name('login');

Route::post('/login', 'AuthController@loginUser')->name('login');

Route::get('/forgot-password', 'AuthController@forgot')->name('forgotPassword');

Route::post('/forgot-password', 'AuthController@forgotPassword');

Route::get('/reset-password', 'AuthController@reset')->name('resetPasswordView');

Route::post('/reset-password', 'AuthController@resetPassword');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');


// route('login') => sushi.test/login

// action('AuthController@login') => sushi.test/login

// url('/login') => sushi.test/login

Route::post('/register-user', 'AuthController@registerUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
