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
Route::get('tac-gia/{id}/detail', ['as' =>'author.detail.book','uses' => 'HomeController@author_detail_book']);

Route::get('nha-xuat-ban', ['as' =>'home.publisher','uses' => 'HomeController@publisher']);
Route::get('nha-xuat-ban/{id}/detail', ['as' =>'publisher.detail.book','uses' => 'HomeController@publisher_detail_book']);

Route::get('cong-ty-phat-hanh', ['as' =>'home.issuer','uses' => 'HomeController@issuer']);
Route::get('cong-ty-phat-hanh/{id}/detail', ['as' =>'issuer.detail.book','uses' => 'HomeController@issuer_detail_book']);

Route::get('tim-kiem', ['as' =>'home.search','uses' => 'HomeController@search']);

Route::get('danh-muc/{id}', ['as' =>'home.cate','uses' => 'HomeController@cate']);
Route::get('thanh-toan', ['middleware' => 'auth', 'as' =>'home.checkout','uses' => 'HomeController@checkout']);
Route::get('tai-khoan', ['middleware' => 'auth', 'as' =>'home.customer','uses' => 'HomeController@customer']);

//Ajax giỏ hàng
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

	Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
	Route::get('oder', ['as' => 'admin.oder', 'uses' => 'OderController@oder']);

	Route::group(['prefix' => 'author'], function() {
		Route::get('add', ['as' => 'admin.author.getAdd', 'uses' => 'AuthorController@getAdd']);
		Route::post('add', ['as' => 'admin.author.postAdd', 'uses' => 'AuthorController@postAdd']);

		Route::get('list', ['as' => 'admin.author.getList', 'uses' => 'AuthorController@getList']);
		Route::post('list', ['as' => 'admin.author.postList', 'uses' => 'AuthorController@postList']);
	});

	Route::group(['prefix' => 'cate'], function() {
		Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'CateController@getAdd']);
		Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'CateController@postAdd']);

		Route::get('list', ['as' => 'admin.cate.getList', 'uses' => 'CateController@getList']);
		Route::post('list', ['as' => 'admin.cate.postList', 'uses' => 'CateController@postList']);
	});

	Route::group(['prefix' => 'issuer'], function() {
		Route::get('add', ['as' => 'admin.issuer.getAdd', 'uses' => 'IssuerController@getAdd']);
		Route::post('add', ['as' => 'admin.issuer.postAdd', 'uses' => 'IssuerController@postAdd']);

		Route::get('list', ['as' => 'admin.issuer.getList', 'uses' => 'IssuerController@getList']);
		Route::post('list', ['as' => 'admin.issuer.postList', 'uses' => 'IssuerController@postList']);
	});

	Route::group(['prefix' => 'book'], function() {
		Route::get('add', ['as' => 'admin.book.getAdd', 'uses' => 'BookController@getAdd']);
		Route::post('add', ['as' => 'admin.book.postAdd', 'uses' => 'BookController@postAdd']);

		Route::get('list', ['as' => 'admin.book.getList', 'uses' => 'BookController@getList']);
		Route::post('list', ['as' => 'admin.book.postList', 'uses' => 'BookController@postList']);
	});
	Route::group(['prefix' => 'publisher'], function() {
		Route::get('add', ['as' => 'admin.publisher.getAdd', 'uses' => 'PublisherController@getAdd']);
		Route::post('add', ['as' => 'admin.publisher.postAdd', 'uses' => 'PublisherController@postAdd']);

		Route::get('list', ['as' => 'admin.publisher.getList', 'uses' => 'PublisherController@getList']);
		Route::post('list', ['as' => 'admin.publisher.postList', 'uses' => 'PublisherController@postList']);
	});
	
	Route::group(['prefix' => 'user'], function() {
		Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'UserController@getAdd']);
		Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'UserController@postAdd']);

		Route::get('list', ['as' => 'admin.user.getList', 'uses' => 'UserController@getList']);
		Route::post('list', ['as' => 'admin.user.postList', 'uses' => 'UserController@postList']);
	});

});
