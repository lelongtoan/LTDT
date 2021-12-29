<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SizeController;
use App\OrderDetail;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\SanPhamCtroller;

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
//Product
Route::get('Product/DanhSach', [SanPhamCtroller::class,'LayDanhSach']);
Route::get('Product/{id}', [SanPhamCtroller::class,'find']);
Route::get('Product/ThemMoi', [SanPhamCtroller::class,'create']);
Route::get('Product/edit/{id}', [SanPhamCtroller::class,'edit']);
Route::get('Product/delete/{id}', [SanPhamCtroller::class,'delete']);
//Account
Route::get('Account/DanhSach', [AccountController::class,'LayDanhSach']);
Route::get('Account/{id}', [AccountController::class,'find']);
Route::get('Account/ThemMoi', [AccountController::class,'create']);
Route::get('Account/edit/{id}', [AccountController::class,'edit']);
Route::get('Account/delete/{id}', [AccountController::class,'delete']);
//Category
Route::get('Category/DanhSach', [CategoryController::class,'LayDanhSach']);
Route::get('Category/{id}', [CategoryController::class,'find']);
Route::get('Category/ThemMoi', [CategoryController::class,'create']);
Route::get('Category/edit/{id}', [CategoryController::class,'edit']);
Route::get('Category/delete/{id}', [CategoryController::class,'delete']);
//Color
Route::get('Color/DanhSach', [ColorController::class,'LayDanhSach']);
Route::get('Color/{id}', [ColorController::class,'find']);
Route::get('Color/ThemMoi', [ColorController::class,'create']);
Route::get('Color/edit/{id}', [ColorController::class,'edit']);
Route::get('Color/delete/{id}', [ColorController::class,'delete']);
//Order
Route::get('Order/DanhSach', [OrderController::class,'LayDanhSach']);
Route::get('Order/{id}', [OrderController::class,'find']);
Route::get('Order/ThemMoi', [OrderController::class,'create']);
Route::get('Order/edit/{id}', [OrderController::class,'edit']);
Route::get('Order/delete/{id}', [OrderController::class,'delete']);
//OrderDetail
Route::get('OrderDetail/DanhSach', [OrderDetailController::class,'LayDanhSach']);
Route::get('OrderDetail/{id}', [OrderDetailController::class,'find']);
Route::get('OrderDetail/ThemMoi', [OrderDetailController::class,'create']);
Route::get('OrderDetail/edit/{id}', [OrderDetailController::class,'edit']);
Route::get('OrderDetail/delete/{id}', [OrderDetailController::class,'delete']);
//ProductDetail
Route::get('ProductDetail/DanhSach', [ProductDetailController::class,'LayDanhSach']);
Route::get('ProductDetail/{id}', [ProductDetailController::class,'find']);
Route::get('ProductDetail/ThemMoi', [ProductDetailController::class,'create']);
Route::get('ProductDetail/edit/{id}', [ProductDetailController::class,'edit']);
Route::get('ProductDetail/delete/{id}', [ProductDetailController::class,'delete']);
//Size
Route::get('Size/DanhSach', [SizeController::class,'LayDanhSach']);
Route::get('Size/{id}', [SizeController::class,'find']);
Route::get('Size/ThemMoi', [SizeController::class,'create']);
Route::get('Size/edit/{id}', [SizeController::class,'edit']);
Route::get('Size/delete/{id}', [SizeController::class,'delete']);
//Producer
Route::get('Producer/DanhSach', [ProducerController::class,'LayDanhSach']);
Route::get('Producer/{id}', [ProducerController::class,'find']);
Route::get('Producer/ThemMoi', [ProducerController::class,'create']);
Route::get('Producer/edit/{id}', [ProducerController::class,'edit']);
Route::get('Producer/delete/{id}', [ProducerController::class,'delete']);