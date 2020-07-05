<?php

use Illuminate\Support\Facades\Route;

  Route::get('/', function () {
    return view('auth.login');
});
 
Auth::routes(['reset'=>false]);
Route::resource('contactos', 'ContactosController');

/* Route::post('contactos',function(){
  request()->file('Foto')->store('my-file','s3');
}); */





Route::get('/home', 'HomeController@index')->name('home');
