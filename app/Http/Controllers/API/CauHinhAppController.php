<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhApp;

class CauHinhAppController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listCauHinhApp = CauHinhApp::all();
        $result = [
            'success'   => true,
            'data'    => $listCauHinhApp
        ];
        return response()->json($result);
    }
    
}