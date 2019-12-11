<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
    // Lay danh sach bai tho
    public function layCauHoi(Request $request) 
    {
        $linhVucID = $request->query('linh_vuc');
        $cau_hoi = CauHoi::where('linh_vuc_id', $linhVucID)->get()->random(3);
        $result = [
            'success'   => true,
            'cau_hoi'    => $cau_hoi
        ];
        return response()->json($result);
    }
}