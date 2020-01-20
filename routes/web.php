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
/* Route::resource('photos.comments', 'PhotoController')->except(
    'update','destroy','store'
)->names(
    [
        'index' => 'afficherPhotos',
    ]
)->parameters([
    'photos'=>'admin',
]
); */

// Route::resource('photos', 'PhotoController@index');

Route::get('photo/{id}','PhotoController@index')->name('test1');

Route::view('hh', 'welcome')->name('welcome');

Route::get('tests',function(){
    // return redirect()->route('test1');
    // return redirect()->away('https://www.google.com');
    // return redirect()->route('welcome')->with('status','Bravo');
    return response()->json([
      'nom'=>'ahha',
      'prenom' => 'lay lay'
    ]);
});

// Route::view('test1','welcome')->name('test1');

