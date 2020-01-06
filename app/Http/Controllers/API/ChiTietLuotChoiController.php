<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietLuotChoi;

class ChiTietLuotChoiController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listChiTietLuotChoi = ChiTietLuotChoi::all();
        $result = [
            'success'   => true,
            'data'    => $listChiTietLuotChoi
        ];
        return response()->json($result);
    }
    
    
}