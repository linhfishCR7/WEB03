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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::resource('backend/danhmuc','Backend\DanhMucController',['as'=>'backend']);
//Trang liên hệ
Route::get('lien-he','Frontend\FrontendController@contact')->name('frontend.pages.contact');
Route::post('lien-he/gui-loi-nhan','Frontend\FrontendController@sendMailContactForm')->name('frontend.pages.contact.sendMail');