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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/section/{id}','Section\SectionController@show');
Route::prefix('course')->group(function(){
    Route::get('list/{id}','Course\CourseController@list');
    Route::get('more/{id}','Course\CourseController@more');
});

