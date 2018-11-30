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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/twitter/callback', 'SocialController@TwitterCallback');

Route::get('login/{provider}/callback','SocialController@Callback');

Route::get('/.well-known/acme-challenge/YgpdQhfEdKopkyWY8LdoB1Of0yGCgzZuuGAs6GUUKtw',function(){
    echo "YgpdQhfEdKopkyWY8LdoB1Of0yGCgzZuuGAs6GUUKtw.AUnH1fm6XV27IS37ZlB7CYpoW9AhVim434gaC4pXuA8";
});



