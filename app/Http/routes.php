<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home.index','uses' => 'HomeController@index']);
Route::get('test/{id}/{qty}', ['as' => 'home.test','uses' => 'HomeController@test']);

Route::get('chi-tiet/{id}', ['as' => 'home.detail','uses' => 'HomeController@detail']);

Route::get('ban-chay-nhat', ['as' =>'home.bestseller','uses' => 'HomeController@bestseller']);
Route::get('ban-chay-nhat/{id}', ['as' =>'bestseller.cate','uses' => 'HomeController@bestseller_cate']);

Route::get('sach-moi', ['as' =>'home.newbook','uses' => 'HomeController@newbook']);
Route::get('sach-moi/{id}', ['as' =>'newbook.cate','uses' => 'HomeController@newbook_cate']);

Route::get('sap-phat-hanh', ['as' =>'home.comming','uses' => 'HomeController@comming']);
Route::get('sap-phat-hanh/{id}', ['as' =>'comming.cate','uses' => 'HomeController@comming_cate']);

Route::get('giam-gia', ['as' =>'home.discount','uses' => 'HomeController@discount']);
Route::get('giam-gia/{id}', ['as' =>'discount.cate','uses' => 'HomeController@discount_cate']);


Route::get('combo', ['as' =>'home.combo','uses' => 'HomeController@combo']);
Route::get('tac-gia', ['as' =>'home.author','uses' => 'HomeController@author']);
Route::get('tac-gia/{id}', ['as' =>'author.detail','uses' => 'HomeController@author_detail']);

Route::get('nha-xuat-ban', ['as' =>'home.publisher','uses' => 'HomeController@publisher']);

Route::get('cong-ty-phat-hanh', ['as' =>'home.issuer','uses' => 'HomeController@issuer']);

Route::get('tim-kiem', ['as' =>'home.search','uses' => 'HomeController@search']);

Route::get('danh-muc/{id}', ['as' =>'home.cate','uses' => 'HomeController@cate']);
Route::get('thanh-toan', ['middleware' => 'auth', 'as' =>'home.checkout','uses' => 'HomeController@checkout']);
Route::get('tai-khoan', ['middleware' => 'auth', 'as' =>'home.customer','uses' => 'HomeController@customer']);

//Ajax
Route::get('mua-sach', ['as' =>'home.buy','uses' => 'AjaxController@buy']);
Route::get('xoa-sach', ['as' =>'home.delete','uses' => 'AjaxController@delete']);
Route::get('cap-nhat-sach', ['as' =>'home.update','uses' => 'AjaxController@update']);
//Authentication
Route::get('dang-nhap', ['as' =>'home.login','uses' => 'Auth\AuthController@getLogin']);
Route::post('dang-nhap', ['as' =>'home.login','uses' => 'Auth\AuthController@postLogin']);

Route::get('dang-ky', ['as' =>'home.register','uses' => 'Auth\AuthController@getRegister']);
Route::post('dang-ky', ['as' =>'home.register','uses' => 'Auth\AuthController@postRegister']);

Route::get('dang-xuat', ['as' =>'home.logout','uses' => 'Auth\AuthController@getLogout']);

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix' => 'cate'], function() {
		Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'CateController@getAdd']);
		Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'CateController@postAdd']);
	});
});