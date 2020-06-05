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
    //admin/user
    Route::get('editUser', 'AdminController@getEditUser')->name('editUser'); //getEditUser
    Route::post('editUser', 'AdminController@postEditUser')->name('post-editUser'); //postEditUser
    //admin/tintuc
    Route::get('tintuc','AdminController@getTinTuc')->name('tintuc'); //show
    Route::get('them-bai-viet', 'AdminController@getAddTinTuc')->name('add-tintuc'); //getInsert
    Route::post('them-bai-viet', 'AdminController@postAddTinTuc')->name('add-tintuc'); //postInsert
    Route::get('edit-bai-viet-{id}', 'AdminController@getEditTinTuc')->name('editTinTuc'); //getUpdate
    Route::post('edit-bai-viet-{id}', 'AdminController@postEditTinTuc')->name('editTinTuc'); //postUpdate
    Route::get('delete-bai-viet-{id}', 'AdminController@getDeleteTinTuc')->name('deleteTinTuc'); //getDelete
    //admin/image
    Route::get('image', 'AdminController@getImage')->name('image'); //show
    Route::get('them-hinh-anh', 'AdminController@getAddImage')->name('add-image');//getInsert
    Route::post('them-hinh-anh', 'AdminController@postAddImage')->name('add-image');//postInsert
    Route::get('edit-hinh-anh-{id}', 'AdminController@getEditImage')->name('editImage'); //getUpdate
    Route::post('edit-hinh-anh-{id}', 'AdminController@postEditImage')->name('editImage');  //postUpdate
    Route::get('delete-hinhanh-{id}', 'AdminController@getDeleteHinhAnh')->name('deleteHinhAnh'); //getDelete
    
   
   
   //Video
    Route::get('video', 'AdminController@getVideo')->name('video');
    Route::post('them-video', 'AdminController@postAddVideo');
    Route::get('delete-video-{id}', 'AdminController@getDeleteVideo');
    



});

//Route::resource('home', 'HomeController');
//Route::resource('admin', 'AdminController');

//Route::get('admin','AdminController@getHome');
Route::get('image', 'AdminController@getImage');

//Route::get('/', 'AdminController@getHome')->name('home');
Route::get('trang-chu', 'HomeController@getIndex')->name('trang-chu');
Route::get('tin-tuc-{id}', 'HomeController@getTinTuc')->name('tintucHome');

