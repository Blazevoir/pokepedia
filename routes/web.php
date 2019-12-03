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
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {return view('index'););

Route::get('/', function(){
    return redirect()->route('login');
});
Route::post('entrar','IndexController@entrar');

Route::get('home',function(){
    return view('home')->with(['tipo'=>'usuario']);
}); //->middleware('verified')

Auth::routes(['verify'=> true]);

Route::get('pokedex','IndexController@pokedex');
Route::get('pokedex/create/','IndexController@pokedexCreate');

Route::get('post','IndexController@post');
Route::get('post/create/','IndexController@postCreate');


Route::get('pokedex/{pokemon}','IndexController@show');

Route::get('pokedex/delete/{pokemon}','IndexController@destroy');

Route::post('anadir','IndexController@store');
Route::post('anadirPost','IndexController@storePost');

Route::get('pokemon',function(){
    return view('pokemon');
})->middleware('verified');

