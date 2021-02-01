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
//in ấn
Route::get('/backend/sanpham/print', 'Backend\SanPhamController@print')->name('backend.sanpham.print');
Route::get('/backend/sanpham/excel', 'Backend\SanPhamController@excel')->name('backend.sanpham.excel');
Route::get('/backend/sanpham/pdf', 'Backend\SanPhamController@pdf')->name('backend.sanpham.pdf');

Route::resource('backend/danhmuc','Backend\DanhMucController',['as'=>'backend']);
Route::resource('backend/mau','Backend\MauController',['as'=>'backend']);
Route::get('backend/mau/{id}/edit/','Backend\MauController@edit');
Route::resource('backend/sanpham','Backend\SanPhamController',['as'=>'backend']);
//Báo cáo Đơn hàng
Route::get('/backend/baocao/donhang', 'Backend\BaoCaoController@donhang')->name('backend.baocao.donhang');
Route::get('/backend/baocao/donhang/data', 'Backend\BaoCaoController@donhangData')->name('backend.baocao.donhang.data');


//api-thống kê
Route::get('backend/thongke_3_sanpham_moinhat', 'Backend\BackendController@thongke_3_sanpham_moinhat')->name('backend.pages.thongke_3_sanpham_moinhat');




/*
-----------------------------------------------------------------------------------------------------------------
*/

/*
frontend route
*/
//trang chủ
Route::get('/','Frontend\FrontendController@index')->name('frontend.index');
Route::get('/san-pham/{id}', 'Frontend\FrontendController@productDetail')->name('frontend.productDetail');
Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');
Route::post('/dat-hang', 'Frontend\FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'Frontend\FrontendController@orderFinish')->name('frontend.orderFinish');
//api-tìm kiếm sản phẩm
Route::get('timkiem', 'Frontend\FrontendController@timkiem')->name('frontend.pages.timkiem');

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
