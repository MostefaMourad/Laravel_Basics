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

Route::get('/show','ShowProfile');

Route::view('/', 'welcome')->name('welcome');

Route::view('/hh', 'test')->name('test');

/* Route::resource('photos', 'PhotoController')->only(
    'index','show'
); */

/* Route::apiResource('photos','PhotoController')->except(
    'show','update','destroy'
); */
Route::resource('photos.comments', 'PhotoController')->except(
    'update','destroy','store'
)->names(
    [
        'index' => 'afficherPhotos',
    ]
)->parameters([
    'photos'=>'admin',
]
);

