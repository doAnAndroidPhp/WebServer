<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LichSuMuaCredit;

class LichSuMuaCreditController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listLichSuMuaCredit = LichSuMuaCredit::all();
        $result = [
            'success'   => true,
            'data'    => $listLichSuMuaCredit
        ];
        return response()->json($result);
    }
    
}