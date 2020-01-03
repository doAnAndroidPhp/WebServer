<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LuotChoi;

class LuotChoiController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listLuotChoi = LuotChoi::all();
        $result = [
            'success'   => true,
            'data'    => $listLuotChoi
        ];
        return response()->json($result);
    }
    public function luuLuotChoi(Request $req) 
    {
        $luotChoi = new LuotChoi;
        $luotChoi->nguoi_choi_id = $req->nguoi_choi_id;
        $luotChoi->so_cau = $req->so_cau;
        $luotChoi->diem = $req->diem;
        $luotChoi->ngay_gio = $req->ngay_gio;
        $luotChoi->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Lưu thành công',
            ]);
    }
}