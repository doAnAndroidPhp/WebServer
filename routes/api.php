<?php

use Illuminate\Http\Request;

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

Route::get('linh-vuc', 'API\LinhVucController@layDanhSach');
Route::get('cau-hoi', 'API\CauHoiController@layCauHoi');
Route::get('goi-credit', 'API\GoiCreditController@layDanhSach');
Route::get('nguoi-choi', 'API\NguoiChoiController@layDanhSach');
Route::get('cau-hinh-app', 'API\CauHinhAppController@layDanhSach');
Route::get('cau-hinh-tro-giup', 'API\CauHinhTroGiupController@layDanhSach');
Route::get('lich-su-mua-credit', 'API\LichSuMuaCreditController@layDanhSach');
Route::get('chi-tiet-luot-choi', 'API\ChiTietLuotChoiController@layDanhSach');
Route::get('luot-choi', 'API\LuotChoiController@layDanhSach');
Route::get('quan-tri-vien', 'API\QuanTriVienController@layDanhSach');

Route::post('dang-nhap', 'API\DangNhapController@dangNhap');
Route::post('dang-ky', 'API\NguoiChoiController@dangKy');
Route::post('luu-luot-choi', 'API\LuotChoiController@luuLuotChoi');
Route::middleware(['assign.guard:api','jwt.auth'])->group(function(){
	Route::get('lay-thong-tin', 'API\DangNhapController@layThongTin');
});