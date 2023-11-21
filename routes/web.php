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
// Report bentuk Chart Column
Route::get('bo_pk_cr_pku','PkuController@bo_pk_cr_pku')->name('showchart');
// Show form SDM Mekaar
Route::get('bo_sd_de_showformentrymekaar','SdmController@bo_sd_de_showformentrymekaar')->name('showsdmmekaar');
// Route Update SDM mekaar
Route::post('bo_sd_de_updsdmmekaar','SdmController@bo_sd_de_updsdmmekaar');
// Route Add SDM Mekaar
Route::post('bo_sd_de_addsdmmekaar','SdmController@bo_sd_de_addsdmmekaar');
// Route Hapus data SDM Mekaar
Route::delete('bo_sd_del_sdmmekaar','SdmController@bo_sd_del_sdmmekaar');
// Show form SDM ULaMM
 Route::get('bo_sd_de_showformentryulamm','SdmController@bo_sd_de_showformentryulamm')->name('showsdmulamm');
//  Update SDM ULAMM
Route::post('bo_sd_de_updsdmulamm','SdmController@bo_sd_de_updsdmulamm');
// Add SDM ULaMM
Route::post('bo_sd_de_addsdmulamm','SdmController@bo_sd_de_addsdmulamm');
// Delete SDM ULaMM
Route::delete('bo_sd_del_sdmulamm','SdmController@bo_sd_del_sdmulamm');
// Show PPI IT FORM
Route::get('bo_kd_de_showformentrypc','InventoryController@bo_kd_de_showformentrypc')->name('showformentrydatapc');
// route menghindari Error : The GET method is not supported for this route
Route::get('bo_it_de_updatepclaptop','InventoryController@bo_kd_de_showformentrypc');
// update PPI IT laptop/pc
Route::post('bo_it_de_updatepclaptop','InventoryController@bo_it_de_updatepclaptop');
// Add data PPI IT laptop/PC 
Route::post('bo_it_de_addpclaptop','InventoryController@bo_it_de_addpclaptop');
// Delete data PPI IT laptop/PC 
Route::delete('bo_del_pclaptop','InventoryController@bo_del_pclaptop');
// REPORT-REPORT
// Pdf Report KDO
Route::get('bo_lp_ppi_kdo','InventoryController@bo_lp_ppi_kdo');
// export excel KDO
Route::get('export_to_excel_kdo','InventoryController@export_to_excel_kdo');
// PDF Report Laptop 
Route::get('bo_lp_ppi_pclaptop','InventoryController@bo_lp_ppi_pclaptop');
// Export Report Laptop 
Route::get('export_to_excel_laptoppc','InventoryController@export_to_excel_laptoppc');
// PDF Report SDM Mekaar
Route::get('bo_lp_sdm_mekaar','SdmController@bo_lp_sdm_mekaar');
// Export Report SDM Mekaar to excel
Route::get('export_to_excel_sdmmekaar','SdmController@export_to_excel_sdmmekaar');
// Chart SDM Mekaar
Route::get('bo_lp_sdm_chartmekaar','SdmController@bo_lp_sdm_chartmekaar');
// Bar Chart SDM Mekaar 
Route::get('bar_chart_sdm_mekaar','SdmController@bar_chart_sdm_mekaar');
// PDF Report SDM ULaMM 
Route::get('bo_lp_sdm_ulamm','SdmController@bo_lp_sdm_ulamm');
// Export Report SDM ULAMM to excel
Route::get('export_to_excel_sdmulamm','SdmController@export_to_excel_sdmulamm');