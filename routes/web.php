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

Route::group(['prefix'=>'admin'], function(){
	Route::get('', function(){
		return view('admin.index');
	});
	Route::group(['prefix'=>'cart'], function(){
//		Route::get('add',['as'=>'admin.cate.getAdd', 'uses'=>'Controller']);
	});

});

Route::group(['prefix'=>'uses'], function(){
	Route::get('', function(){
		return view('uses.layouts.home');
	});
	Route::group(['prefix'=>'cart'], function(){
//		Route::get('add',['as'=>'admin.cate.getAdd', 'uses'=>'Controller']);
	});

});
