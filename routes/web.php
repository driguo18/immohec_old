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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

/* Route::get('/home', 'HomeController@index')->name('home'); */

Auth::routes();

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('property_type','Property_typeController');
    Route::resource('category','CategoryController');
    Route::resource('owner','OwnerController');
    Route::resource('client','ClientController');
    Route::resource('property','PropertyController');
    Route::resource('property_sale','SaleController');
    Route::resource('property_rent','RentController');
});

Route::group(['as'=>'agent.','prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','agent']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
