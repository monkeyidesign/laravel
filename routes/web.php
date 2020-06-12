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


Route::get('admin/login', function () {
    //return view('login');
    return 'testing';
});
//
//Route::get('/', function () {
//    return view('index');
//});
//
//Route::post('app/create-tag', 'TestController@test' );
//
//Auth::routes();
//Route::get('logout', 'Auth\LoginController@logout', function () {
//    return abort(404);
//});
//Route::any('{slug}', function (){
//    return view('home');
//});
//
////Route::get('{path}',"HomeController@index")->where('path','[-a-z0-9_\s]+');
//Route::get('/admin', 'HomeController@index')->name('home');
