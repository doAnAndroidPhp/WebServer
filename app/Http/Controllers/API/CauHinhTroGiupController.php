<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $nguoi_choi = NguoiChoi::all();
        $result = [
            'success'   => true,
            'nguoi_choi'    => $nguoi_choi
        ];
        return response()->json($result);
    }

    # lay bai tho theo id
    public function layDiem($id) {
        $nguoi_choi = NguoiChoi::find($id);
        if($nguoi_choi == null)
        {
            return response()->json(['success' => false]);
        }
        
        $result = [
            'success'   => true,
            'nguoi_choi'    => $nguoi_choi
        ];
        return response()->json($result);
    }
}