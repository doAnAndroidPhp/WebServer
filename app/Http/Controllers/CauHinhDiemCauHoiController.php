<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhDiemCauHoi;

class CauHinhDiemCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhDiemCauHoi = CauHinhDiemCauHoi::all(); 
        return view('cau-hinh-diem-cau-hoi.danh_sach', compact('listCauHinhDiemCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hinh-diem-cau-hoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CauHinhDiemCauHoi = new CauHinhDiemCauHoi;
        $CauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $CauHinhDiemCauHoi->diem = $request->diem;
        $CauHinhDiemCauHoi->save();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $CauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh-diem-cau-hoi.form', compact('CauHinhDiemCauHoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $CauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $CauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $CauHinhDiemCauHoi->diem = $request->diem;
        $CauHinhDiemCauHoi->save();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $CauHinhDiemCauHoi->delete();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }
}
