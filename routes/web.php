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
//Xuất xứ
Route::resource('backend/xuatxu','Backend\XuatXuController',['as'=>'backend']);
//Vận chuyển
Route::resource('backend/vanchuyen','Backend\VanChuyenController',['as'=>'backend']);
//Thanh toán
Route::resource('backend/thanhtoan','Backend\ThanhToanController',['as'=>'backend']);
//Quyền
Route::resource('backend/quyen','Backend\QuyenController',['as'=>'backend']);
//Phiếu nhập
Route::resource('backend/phieunhap','Backend\PhieuNhapController',['as'=>'backend']);
Route::get('backend/phieunhap/print/{id}','Backend\PhieuNhapController@print')->name('backend.phieunhap.print');;
//Khách hàng
Route::resource('backend/khachhang','Backend\KhachHangController',['as'=>'backend']);
//Chủ đề
Route::resource('backend/chude','Backend\ChuDeController',['as'=>'backend']);

//api-thống kê
Route::get('backend/thongke_3_sanpham_moinhat', 'Backend\BackendController@thongke_3_sanpham_moinhat')->name('backend.pages.thongke_3_sanpham_moinhat');
Route::get('backend/gallery', 'Backend\BackendController@gallery')->name('backend.pages.gallery');
Route::get('backend/profile/{id}', 'Backend\BackendController@profile')->name('backend.user.profile');
Route::get('backend/team', 'Backend\BackendController@team')->name('backend.user.team');
Route::get('backend/faqs', 'Backend\BackendController@faqs')->name('backend.user.faqs');





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
//xác nhận khách hàng
Route::get('/xac-thuc', 'Frontend\FrontendController@xacThuc')->name('frontend.xacThuc');
Route::post('/dang-ky-tai-khoan', 'Frontend\FrontendController@register')->name('frontend.register');
Route::post('/dang-nhap', 'Frontend\FrontendController@login')->name('frontend.login');
Route::get('/dang-xuat', 'Frontend\FrontendController@logout')->name('frontend.logout');
Route::get('/profile', 'Frontend\FrontendController@profile')->name('frontend.profile');

//api-tìm kiếm sản phẩm //test
Route::get('timkiem', 'Frontend\FrontendController@timkiem')->name('frontend.pages.timkiem');

//trang chức năng
Route::get('lien-he','Frontend\FrontendController@contact')->name('frontend.pages.contact');
Route::post('lien-he/gui-loi-nhan','Frontend\FrontendController@sendMailContactForm')->name('frontend.pages.contact.sendMail');
Route::get('cau-hoi-thuong-gap','Frontend\FrontendController@question')->name('frontend.pages.question');
Route::get('cau-hoi-thuong-gap/chi-tiet','Frontend\FrontendController@questionDetail')->name('frontend.pages.questionDetail');
Route::get('huong-dan-su-dung','Frontend\FrontendController@guideUse')->name('frontend.pages.guideUse');
Route::get('rieng-tu','Frontend\FrontendController@private')->name('frontend.pages.private');
Route::get('boi-thuong','Frontend\FrontendController@compensation')->name('frontend.pages.compensation');
Route::get('product','Frontend\FrontendController@product')->name('frontend.pages.product');

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware('can:director-users')->group(function(){
  Route::resource('/user', 'UserController',[ 'except' => ['show','create','store']]);
});

