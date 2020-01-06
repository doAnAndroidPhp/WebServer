<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LuotChoi;
use App\CauHoi;
use Illuminate\Support\Facades\DB;
class TrangChuController extends Controller
{
    public function trangChu(){
    	$listNguoiChoi = NguoiChoi::all();
    	//$diemCaoNhat = DB::table('Nguoi_Choi')->select('diem_cao_nhat') ->where('diem_cao_nhat', DB::raw("(select max('diem_cao_nhat') from Nguoi_Choi)"))->get();
    	$diemCaoNhat = DB::table('Nguoi_Choi')->max('diem_cao_nhat');
    	$listCauHoi = CauHoi::all();
    	$listLuotChoi = LuotChoi::all();
        return view('trang-chu', compact('listNguoiChoi','listCauHoi','listLuotChoi','diemCaoNhat'));
    }
}
