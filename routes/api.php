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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
