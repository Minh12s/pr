<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController:: class,"quanlynhanvien"]);

//Route::get('/', function () {
//    return view('pages.admin.quanlynhanvien');
//});
Route::get('/pages/admin/quanlykhachhang', function () {
    return view('pages.admin.quanlykhachhang');
});

Route::get('/pages/admin/quanlydonhang', function () {
    return view('pages.admin.quanlydonhang');
});

Route::get('/pages/admin/quanlysanpham', function () {
    return view('pages.admin.quanlysanpham');
});
Route::get('/pages/admin/quanlythongtinkhuyenmai', function () {
    return view('pages.admin.quanlythongtinkhuyenmai');
});
Route::get('/pages/admin/login', function () {
    return view('pages.admin.login');
});


Route::get('nhanvien', [\App\Http\Controllers\HomeController:: class,"quanlykhachhang"]);

//Route::get('/pages/nhanvien/quanlykhachhang', function () {
//    return view('pages.nhanvien.quanlykhachhang');
//});

Route::get('/pages/nhanvien/quanlydonhang', function () {
    return view('pages.nhanvien.quanlydonhang');
});


Route::get('/pages/nhanvien/quanlysanpham', function () {
    return view('pages.nhanvien.quanlysanpham');
});
Route::get('/pages/nhanvien/quanlythongtinkhuyenmai', function () {
    return view('pages.nhanvien.quanlythongtinkhuyenmai');
});
Route::get('/pages/nhanvien/login', function () {
    return view('pages.nhanvien.login');
});


Route::get('homeCustomer', [\App\Http\Controllers\HomeController::class,"homeCustomer"]);
Route::get('shop', [\App\Http\Controllers\HomeController::class,"shop"]);
Route::get('favorites_list', [\App\Http\Controllers\HomeController::class,"favorites_list"]);
Route::get('product', [\App\Http\Controllers\HomeController::class,"product"]);
Route::get('cart', [\App\Http\Controllers\HomeController::class,"cart"]);
Route::get('checkout', [\App\Http\Controllers\HomeController::class,"checkout"]);
Route::get('about', [\App\Http\Controllers\HomeController::class,"about"]);
Route::get('contact', [\App\Http\Controllers\HomeController::class,"contact"]);

