<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
use Hash;

class NguoiChoiController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listNguoiChoi = NguoiChoi::all();
        $result = [
            'success'   => true,
            'data'    => $listNguoiChoi
        ];
        return response()->json($result);
    }
    public function dangKy(Request $req)
    {
        $nguoiChoi = new NguoiChoi;
        $nguoiChoi->ten_dang_nhap = $req->ten_dang_nhap;
        $nguoiChoi->mat_khau =  Hash::make($req->mat_khau);
        $nguoiChoi->email = $req->email;
        $nguoiChoi->hinh_dai_dien = "avt.jpg";

       if (NguoiChoi::where('ten_dang_nhap', '=', $req->ten_dang_nhap)->exists()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên người dùng đã tồn tại',
            ]);
        }
        $nguoiChoi->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Đăng ký thành công',
            ]);
    }
    public function doiMatKhau(Request $req){
        $nguoiChoi = NguoiChoi::find($req->id);
        $nguoiChoi->mat_khau = Hash::make($req->mat_khau);
        $nguoiChoi->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Đổi mật khẩu thành công',
            ]);
    }
    public function muaCredit(Request $req){
        $nguoiChoi = NguoiChoi::find($req->id);
        $nguoiChoi->credit = $nguoiChoi->credit+$req->credit;
        $nguoiChoi->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Mua thành công',
            ]);
    }
}