<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhDiemCauHoi;

class CauHinhDiemCauHoiController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listCauHinhDiemCauHoi = CauHinhDiemCauHoi::all();
        $result = [
            'success'   => true,
            'data'    => $listCauHinhDiemCauHoi
        ];
        return response()->json($result);
    }
    
}