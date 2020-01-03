<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
class DangNhapController extends Controller
{
    public function dangNhap(Request $req)
    {
         $nguoiChoi = new NguoiChoi;
        $nguoiChoi->ten_dang_nhap = $req->ten_dang_nhap;
        if (!NguoiChoi::where('ten_dang_nhap', '=', $req->ten_dang_nhap)->exists()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên đăng nhập không tồn tại',
            ]);
        }
        $credentials = [
            'ten_dang_nhap' => $req->ten_dang_nhap,
            'password'      => $req->mat_khau
        ];

        if(!$token = auth('api')->attempt($credentials)){
            return response()->json([
                'status'    => false,
                'message'   => 'Unauthorized.',
            ], 401);
        }

        # chung thuc thanh cong
        return response()->json([
            'status'    => true,
            'message'   => 'Authorized.',
            'token'     => $token,
            'type'      => 'bearer',
            'expires'   =>auth('api')->factory()->getTTL() * 60 
        ], 200);
    }
    public function layThongTin(Request $req)
        {
            return auth('api')->user();
        }
}