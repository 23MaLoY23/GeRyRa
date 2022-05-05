<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', 'App\Http\Controllers\MainController@main'); 

Route::get('/onas', 'App\Http\Controllers\MainController@main1');

Route::get('/spec', 'App\Http\Controllers\MainController@main2');

Route::get('/glav', 'App\Http\Controllers\MainController@main3');

Route::get('/mtable', 'App\Http\Controllers\MainController@main4');

Route::post('/mtable', 'App\Http\Controllers\MainController@main_chek')-> name('table1');

Route::get('/table', 'App\Http\Controllers\MainController@main5');

Route::get('/mtable2', 'App\Http\Controllers\MainController@main7');

Route::post('/mtable2', 'App\Http\Controllers\MainController@main_chek2')-> name('table12');

Route::get('/table2', 'App\Http\Controllers\MainController@main6');

Route::get('delete/{id}', 'App\Http\Controllers\MainController@del');



