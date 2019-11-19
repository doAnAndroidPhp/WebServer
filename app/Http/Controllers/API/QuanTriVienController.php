<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuanTriVien;

class QuanTriVienController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listQuanTriVien = QuanTriVien::all();
        $result = [
            'success'   => true,
            'data'    => $listQuanTriVien
        ];
        return response()->json($result);
    }
    
}