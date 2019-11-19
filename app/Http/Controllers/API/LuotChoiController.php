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
    
}