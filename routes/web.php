<?php

use Illuminate\Support\Facades\Auth;
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
//Frontend Page
// PERUBAHAN PADA ROUTE 
//PENAMABAHAN KOMNENTAR KE 2
Auth::routes();
// tes lagi
// Route::get('tes',function(){
//     return view('auth.register');
// });

// Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');
//Route To login
// Route::get('/', function () {
//     return redirect(route('login'));
// });

Route::get('/','Auth\LoginController@LoginUser')->name('login');
Route::post('/login','Auth\LoginController@AuthLoginUser')->name('authlogin');

// Route::get('/','Auth\LoginController@LoginUser')->name('login');
// Route::post('/','Auth\LoginController@AuthLoginUser')->name('authlogin');

//Admin Page
Auth::routes([
    'register'=>false
    ]);

Route::get('/home', 'HomeController@admin_index')->name('home')->middleware('verified');
Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');

/* Verifiy Customer User*/
Route::get('/verifyuser','RegistercustomerController@verifyUser')->name('verify.cust');

//Route to admin pages
// INPUT PPI KOD
Route::get('bo_kd_de_showformentrykdo','InventoryController@bo_kd_de_showformentrykdo')->name('showformentrykdo');
// Update KDO
Route::post('bo_kd_de_updatekdo','InventoryController@bo_kd_de_updatekdo');
// Add KDO
Route::post('bo_kd_de_addkdo','InventoryController@bo_kd_de_addkdo');
// DEL KDO
Route::delete('bo_del_kdo','InventoryController@bo_kd_de_delkdo');
// Show form PKU
Route::get('bo_kd_de_showformentrypku','PkuController@bo_kd_de_showformentrypku')->name('showformentrypku');
// add data PKU
Route::post('bo_pk_de_addpku','PkuController@bo_pk_de_addpku');
// Update PKU
Route::post('bo_pk_de_updatepku','PkuController@bo_pk_de_updatepku');
// Delete PKU
Route::delete('bo_pk_del_pkudata','PkuController@bo_pk_del_pkudata');