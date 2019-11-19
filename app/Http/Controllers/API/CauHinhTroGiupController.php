<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhTroGiup;

class CauHinhTroGiupController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listCauHinhTroGiup = CauHinhTroGiup::all();
        $result = [
            'success'   => true,
            'data'    => $listCauHinhTroGiup
        ];
        return response()->json($result);
    }
    
}