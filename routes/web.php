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

// Admin Panel Route
Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');
Route::GET('admin/test','EditorController@test');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');

Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//End Admin Panel Route


//category Route Start
Route::get('add-category','CategoryController@add_category')->name('add-category');
Route::post('save-category','CategoryController@save_category')->name('save-category');
Route::get('category-list','CategoryController@category_list')->name('category-list');
Route::get('delete-category/{id}','CategoryController@category_delete')->name('delete-category');
Route::get('edit-category/{id}','CategoryController@category_edit')->name('edit-category');
Route::post('update-category','CategoryController@category_update')->name('update-category');
//category Route End

//category Route Start
Route::get('add-sub-category','SubCategoryController@add_category')->name('add-sub-category');
Route::post('save-sub-category','SubCategoryController@save_category')->name('save-sub-category');
Route::get('sub-category-list','SubCategoryController@category_list')->name('sub-category-list');
Route::get('delete-sub-category/{id}','SubCategoryController@category_delete')->name('delete-sub-category');
Route::get('edit-sub-category/{id}','SubCategoryController@category_edit')->name('edit-sub-category');
Route::post('update-sub-category','SubCategoryController@category_update')->name('update-sub-category');
//category Route End




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
