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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/oturum/pmenu', 'HomeController@oturum')->name('pmenu');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/category/{slug}', 'HomeController@category')->name('category');
Route::get('hakkimizdakiler', 'HomeController@hakkimizda')->name('hakkimizda');
Route::get('/product/{slug}', 'HomeController@product')->name('product');
Route::resource('gelenmesajlar','GelenMesajlarController');
Route::resource('homecontrol','HomeController');
Route::get('/Kurumsal/Bayi Sozlesmesi ve Prosedurler', 'HomeController@bayi')->name('bayi');
Route::get('change-password', 'ChangePasswordController@index')->name('change');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::post('urun-arama','HomeController@product_search')->name('search.product');
Route::get('maindetay/{id}','HomeController@edit')->name('maindetay');
Route::get('pdf','BasketController@createPDF')->name('createPDF');
Route::get('logout','Auth\LoginController@logout');
Route::post('search','OrderController@teklifSearch')->name('teklifSearch');
Route::get('eski/teklif/{id}','OrderController@teklifPDF')->name('teklifPDF');
Route::get('user/mesaj','GelenMesajlarController@userMesaj')->name('userMesaj');

Route::group(["middleware" => ["is_thisAdmin","auth"]],function (){
    Route::group(["namespace" => "Admin"], function (){
        Route::resource("admin-users","UsersController");
        Route::resource("admin-category","CategoryController");
        Route::resource("admin-products","ProductController");
        Route::resource("admin-orders","OrderController");
        Route::resource('duyurular','DuyurularController');
        Route::resource('mainyonetim','MainYonetimController');
        Route::resource('slider','SliderController');
        Route::get('Admin/Slider/Silme/{id}','SliderController@destroy')->name('slidersil');
        Route::resource('contactadmin','ContactAdminController');
        Route::resource('sosyalmedya','SosyalMedyaController');
        Route::resource('hakkimizda','HakkimizdaController');
        Route::get('dashboard','DuyurularController@dashboard')->name('dashboard');
        Route::post('mesajCevabı/{id}','DuyurularController@mesajCevap')->name('mesajCevap');
        Route::get('silinenMesajlar','DuyurularController@silinenSearch')->name('silinenSearch');
        Route::get('silinenSearch','DuyurularController@silinenMesajlar')->name('silinenMesajlar');
        Route::resource('baslikekleme','MainTitleController');

    });
});
Route::post('gelince-haber-ver','Admin\ProductController@gelince_haber_ver')->name('gelince_haber_ver')->middleware('auth');

Route::group(['prefix' => 'basket'], function () {
    Route::get('/', 'BasketController@index')->name('basket');

    Route::post('/create', 'BasketController@create')->name('basket.create');
    Route::delete('/destroy', 'BasketController@destroy')->name('basket.destroy');
    Route::patch('/update/{rowid}', 'BasketController@update')->name('basket.update');

});

Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/successful', 'PaymentController@pay')->name('pay');



Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/orders/{id}', 'OrderController@detail')->name('order');

Route::resource('profile', 'UserDetailController')->middleware('auth');


Route::get('export', 'ExcelController@export')->name('export');
Route::get('importExportView', 'ExcelController@importExportView');
Route::post('import', 'ExcelController@import')->name('import');

