<?php

use Illuminate\Foundation\Auth\User;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::view('/welcome','welcome',['name' => 'Taylor']);

/* Route::get('/welcome/{id}', function ($id) {
    dd('User '.$id);
}); */

 /* Route::get('/welcome/{name?}', function ($name = null) {
     dd($name);
    }); */

   /* Route::get('/welcome/{name}', function ($name) {
        return $name;
        })->where('name', '[A-Za-z]+'); */

   /*   Route::get('/welcome/{id}',function($id){
            return 'this is good'.$id;
            // return view('welcome');
      })->name('wel');
      
      Route::get('/user',function(){
         return redirect()->route('wel',['id'=>1]);
      }); */

     /* Route::get('players/{player}', function ($player) {
        return $player->level;
        }); */

       /* Route::fallback(function(){
          return 'fechtein sie deutch';
        }); */

        Route::middleware('throttle:60,1')->group(
          function(){
              Route::view('/welcome', 'welcome');
              Route::view('/test', 'test');
              Route::view('/test1', 'test1');   
          }
        );
