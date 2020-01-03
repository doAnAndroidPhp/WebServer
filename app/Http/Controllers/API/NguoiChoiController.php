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
   /* public function checkExist($ten_dang_nhap){
        $query = "Select * from nguoi_choi where ten_dang_nhap = " +$ten_dang_nhap;
        $result = mysqli_query($this->connection, $query);
        if(mysqli_num_rows($result) >0){
            return 1;
        }
        return 0;
    }*/
    
}