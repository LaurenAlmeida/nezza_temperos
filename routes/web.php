<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/index', 'HomeController@index');

Route::get('/sal', 'HomeController@sal');

Route::get('/temperos', 'HomeController@temperos');

Route::get('/diversos', 'HomeController@diversos');

Route::get('/pimentas', 'HomeController@pimentas');
