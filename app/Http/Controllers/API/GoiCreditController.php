<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listGoiCredit = GoiCredit::all();
        $result = [
            'success'   => true,
            'data'    => $listGoiCredit
        ];
        return response()->json($result);
    }
    
}