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
        $listNguoiChoi = NguoiChoi::all();
        $result = [
            'success'   => true,
            'data'    => $listNguoiChoi
        ];
        return response()->json($result);
    }
    
}