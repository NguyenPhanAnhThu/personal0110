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
Route::get('register','AdminController@getRegister')->name('register');
Route::post('register','AdminController@postRegister')->name('register');
Route::get('login', 'AdminController@getLogin')->name('login');
Route::post('login', 'AdminController@postLogin')->name('login');

Route::group(['prefix'=>'admin','middleware'=>'checkAdminLogin'],  function(){
    //admin
    Route::get('/', 'AdminController@getHome')->name('home');
    Route::get('editUser', 'AdminController@getEditUser')->name('editUser');
    Route::post('editUser', 'AdminController@postEditUser')->name('post-editUser');
    Route::get('tintuc','AdminController@getTinTuc')->name('tintuc');
    Route::get('them-bai-viet', 'AdminController@getAddTinTuc')->name('add-tintuc');
    Route::post('them-bai-viet', 'AdminController@postAddTinTuc')->name('add-tintuc');
    Route::get('edit-hinh-anh-{id}', 'AdminController@getEditTinTuc')->name('editTinTuc');
    Route::post('edit-hinh-anh-{id}', 'AdminController@postEditTinTuc')->name('editTinTuc');
    Route::get('image', 'AdminController@getImage')->name('image');
    Route::get('them-hinh-anh', 'AdminController@getAddImage')->name('add-image');
    Route::post('them-hinh-anh', 'AdminController@postAddImage')->name('add-image');
   
    Route::get('video', 'AdminController@getVideo')->name('video');
    Route::post('them-video', 'AdminController@postAddVideo');
    Route::get('delete-video-{id}', 'AdminController@getDeleteVideo');
    Route::get('delete-tintuc-{id}', 'AdminController@getDeleteTinTuc')->name('deleteTinTuc');
    Route::get('delete-hinhanh-{id}', 'AdminController@getDeleteHinhAnh')->name('deleteHinhAnh');
});

//Route::resource('home', 'HomeController');
//Route::resource('admin', 'AdminController');

//Route::get('admin','AdminController@getHome');
Route::get('image', 'AdminController@getImage');

//Route::get('/', 'AdminController@getHome')->name('home');
Route::get('trang-chu', 'HomeController@getIndex')->name('trang-chu');
Route::get('tin-tuc-{id}', 'HomeController@getTinTuc')->name('tintucHome');

