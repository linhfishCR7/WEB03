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
/*
backend route
*/

Route::resource('backend/danhmuc','Backend\DanhMucController',['as'=>'backend']);
Route::resource('backend/mau','Backend\MauController',['as'=>'backend']);
Route::get('backend/mau/{id}/edit/','Backend\MauController@edit');
Route::resource('backend/sanpham','Backend\SanPhamController',['as'=>'backend']);



/*
-----------------------------------------------------------------------------------------------------------------
*/

/*
frontend route
*/
//trang chủ
Route::get('index','Frontend\FrontendController@index')->name('frontend.index');

//trang chức năng
Route::get('lien-he','Frontend\FrontendController@contact')->name('frontend.pages.contact');
Route::post('lien-he/gui-loi-nhan','Frontend\FrontendController@sendMailContactForm')->name('frontend.pages.contact.sendMail');
Route::get('cau-hoi-thuong-gap','Frontend\FrontendController@question')->name('frontend.pages.question');
Route::get('cau-hoi-thuong-gap/chi-tiet','Frontend\FrontendController@questionDetail')->name('frontend.pages.questionDetail');
Route::get('huong-dan-su-dung','Frontend\FrontendController@guideUse')->name('frontend.pages.guideUse');
Route::get('rieng-tu','Frontend\FrontendController@private')->name('frontend.pages.private');
Route::get('boi-thuong','Frontend\FrontendController@compensation')->name('frontend.pages.compensation');

//đa ngôn ngữ
Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');
/*
-----------------------------------------------------------------------------------------------------------------
*/
