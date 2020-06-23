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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [
//    'uses' => 'Page\HomepageController@index',
//    'as' => 'home_path'
//]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path'
]);

//detail
Route::get('/paquetes/{url}', [
    'uses' => 'Page\HomepageController@detail',
    'as' => 'detail_path',
]);

Route::get('/load/packages', [
    'uses' => 'Page\HomepageController@load',
    'as' => 'load_path',
]);
Route::get('/load/packages-all', [
    'uses' => 'Page\HomepageController@load_all',
    'as' => 'load_all_path',
]);

Route::post('/agregar', [
    'uses' => 'Page\HomepageController@agregar',
    'as' => 'agregar_path',
]);


//packages

Route::get('/packages/', [
    'uses' => 'Page\HomepageController@packages',
    'as' => 'packages_path',
]);

//destinations
Route::get('/destination', [
    'uses' => 'Page\HomepageController@destination',
    'as' => 'destination_path',
]);
Route::get('/destination/{url}', [
    'uses' => 'Page\HomepageController@destination_show',
    'as' => 'destination_show_path',
]);

//about
Route::get('/about-us/', [
    'uses' => 'Page\HomepageController@about',
    'as' => 'about_path',
]);

//luxury
Route::get('/packages/category/luxury', [
    'uses' => 'Page\HomepageController@luxury',
    'as' => 'luxury_path',
]);

//tours
Route::get('/tours', [
    'uses' => 'Page\HomepageController@tours',
    'as' => 'tours_path',
]);

//social
Route::get('/social-responsability', [
    'uses' => 'Page\HomepageController@social',
    'as' => 'social_path',
]);
