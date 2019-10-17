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

Route::get('/', 'AdminController@index')->name('admin.index');

Route::get('/news', 'AdminController@news')->name('admin.news');
Route::post('/news/save', 'AdminController@SaveNews')->name('news.save');
Route::post('/news/update/{id?}', 'AdminController@UpdateNews')->name('news.update');
Route::get('/news/delete/{id?}', 'AdminController@DeleteNews')->name('news.delete');

// Branch route
Route::get('/branchs', 'AdminController@Branch')->name('admin.branch');
Route::post('/branchs/save', 'AdminController@BranchSave')->name('branch.save');
Route::post('/branchs/update/{id?}', 'AdminController@UpdateBranch')->name('branch.update');
Route::get('/branchs/delete/{id?}', 'AdminController@DeleteBranch')->name('branch.delete');

// Package route
Route::get('/package', 'AdminController@Package')->name('admin.package');
Route::post('/package/save', 'AdminController@SavePackage')->name('package.save');
Route::post('/package/update/{id?}', 'AdminController@UpdatePackage')->name('package.update');
Route::get('/package/delete/{id?}', 'AdminController@DeletePackage')->name('package.delete');
// Package over zone route
Route::get('/package-overzone', 'AdminController@PackagOver')->name('admin.package_overpart');
Route::post('/package-overzone/save', 'AdminController@SavePackageOver')->name('package_overpart.save');
Route::post('/package-overzone/update/{id?}', 'AdminController@UpdatePackageOver')->name('package_overpart.update');
Route::get('/package-overzone/delete/{id?}', 'AdminController@DeletePackageOver')->name('package_overpart.delete');