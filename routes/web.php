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

//Home Page Route
Route::get('parametre', 'App\Http\Controllers\HomeController@create_home_admin');
Route::get('/', 'App\Http\Controllers\HomeController@create_home_user');
Route::post('send_messgae', 'App\Http\Controllers\HomeController@send_messgae');
//Auth::routes();

//user Route
Route::get('/mon-profil', 'App\Http\Controllers\user_profileController@create_user_profile')->middleware('login');
Route::get('/connexion-admin', 'App\Http\Controllers\Auth\loginController@create_login');
Route::post('/login_admin', 'App\Http\Controllers\Auth\loginController@login_admin');
Route::get('/logout', 'App\Http\Controllers\Auth\loginController@logout');

//Gestion admin Route
Route::get('gestion-administrateur', 'App\Http\Controllers\adminController@create_admin')->middleware('login');
Route::post('store_admin', 'App\Http\Controllers\adminController@store_admin');
Route::get('edit-admin/{id}', 'App\Http\Controllers\adminController@find_admin');
Route::post('upadate_admin/{id}', 'App\Http\Controllers\adminController@update_admin')->name('update_admin');
Route::get('delete_admin/{id}', 'App\Http\Controllers\adminController@delete_admin');
Route::get('list-admin', 'App\Http\Controllers\adminController@list_admin');
Route::get('activate_admin/{id}', 'App\Http\Controllers\adminController@activate_admin');
Route::get('deactivate_admin/{id}', 'App\Http\Controllers\adminController@deactivate_admin');
Route::get('profil-admin', 'App\Http\Controllers\update_admin_profileController@create_admin_profile')->middleware('login');
Route::post('update_user_profile/{id}', 'App\Http\Controllers\update_admin_profileController@update_user_profile')->name('update_user_profile')->middleware('login');


//site
Route::get('les-site', 'App\Http\Controllers\siteController@find_all_site');
Route::get('create-site', 'App\Http\Controllers\siteController@create_site')->middleware('login');
Route::get('find_dept/{id}', 'App\Http\Controllers\siteController@find_dept');
Route::get('find_activity/{id}', 'App\Http\Controllers\siteController@find_activity');
Route::post('store_site', 'App\Http\Controllers\siteController@store_site')->middleware('login');
Route::get('lister-site', 'App\Http\Controllers\siteController@create_list_site')->middleware('login');
Route::get('find_arrondissement/{id}', 'App\Http\Controllers\siteController@find_arrondissement');
Route::get('create_update_site/{id}', 'App\Http\Controllers\update_siteController@create_update_site')->name('update_siteController');
Route::post('update_site/{id}', 'App\Http\Controllers\update_siteController@update_site')->name('update_site');
Route::get('delete_site/{id}', 'App\Http\Controllers\siteController@delete_site')->name('delete_site');
Route::get('activate_site/{id}', 'App\Http\Controllers\siteController@activate_site')->name('activate_site');
Route::get('editer-site/{id}', 'App\Http\Controllers\update_siteController@edit_site_user');
Route::get('find_site_by_concession/{id}', 'App\Http\Controllers\siteController@find_site_by_concession');
Route::get('find_site_by_licence/{id}', 'App\Http\Controllers\siteController@find_site_by_licence');
Route::get('filter_site_by_region/{id}', 'App\Http\Controllers\siteController@filter_site_by_region');
Route::get('filter_site_by_dept/{id}', 'App\Http\Controllers\siteController@filter_site_by_dept');
Route::get('filter_site_by_arr/{id}', 'App\Http\Controllers\siteController@filter_site_by_arr');
Route::get('filter_site_by_regime/{id}', 'App\Http\Controllers\siteController@filter_site_by_regime');
Route::get('filter_site_by_activite/{id}', 'App\Http\Controllers\siteController@filter_site_by_activite');


//Documentation route
Route::get('documentation-regime', 'App\Http\Controllers\documentationController@create_regime');
Route::get('documentation-juridiction', 'App\Http\Controllers\documentationController@create_juridiction');
Route::get('download_loi/{id}', 'App\Http\Controllers\documentationController@download_loi');
Route::get('download_decret/{id}', 'App\Http\Controllers\documentationController@download_decret');
Route::get('download_arrete/{id}', 'App\Http\Controllers\documentationController@download_arrete');
Route::get('view_arrete/{id}', 'App\Http\Controllers\documentationController@view_arrete');
Route::get('view_decret/{id}', 'App\Http\Controllers\documentationController@view_decret');
Route::get('view_loi/{id}', 'App\Http\Controllers\documentationController@view_loi');
Route::get('procedure-investissement', 'App\Http\Controllers\documentationController@create_procedure_invest');
Route::get('raison-investissement', 'App\Http\Controllers\documentationController@create_raison_invest');
Route::get('juridiction-regime', 'App\Http\Controllers\documentationController@create_juridiction_regime');
Route::get('dowload_loi_regime/{id}', 'App\Http\Controllers\documentationController@dowload_loi_regime');
Route::get('dowload_procedure/{id}', 'App\Http\Controllers\documentationController@dowload_procedure');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
