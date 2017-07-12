<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
  Route::resource('users','UsersController'); //Primer parametro: nombre de grupo de rutas / segundo nombre del controlador
    Route::get('users/{id}/destroy', [
      'uses' => 'UsersController@destroy',
      'as' => 'admin.users.destroy'
    ]);

  Route::resource('movies','MoviesController');
    Route::get('movies/{id}/destroy',[
      'uses' => 'MoviesController@destroy',
      'as' => 'admin.movies.destroy'
    ]);
  Route::resource('rents','RentsController');
    Route::get('rents/{id}/destroy',[
      'uses' => 'RentsController@destroy',
      'as' => 'admin.rents.destroy'
    ]);
  Route::resource('genres','GenresController');
  Route::get('genres/{id}/destroy', [
      'uses'  => 'GenresController@destroy',
        'as'    => 'admin.genres.destroy'
  ]);

});
