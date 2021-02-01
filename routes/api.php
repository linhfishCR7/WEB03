<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/thongke/top3_sanpham_moinhat', [ApiController::class,  'thongke_top3_sanpham_moinhat'])->name('api.thongke.top3_sanpham_moinhat');
Route::get('/sanpham/timkiem',[ApiController::class,'timkiem'])->name('api.timkiem');
