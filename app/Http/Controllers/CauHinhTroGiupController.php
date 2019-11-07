<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhTroGiup;

class CauHinhTroGiupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhTroGiup = CauHinhTroGiup::all(); 
        return view('cau-hinh-tro-giup.danh_sach', compact('listCauHinhTroGiup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hinh-tro-giup.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhTroGiup = new CauHinhTroGiup;
        $cauHinhTroGiup->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu = $request->thu_tu;
        $cauHinhTroGiup->credit = $request->credit;
        $cauHinhTroGiup->save();

        return redirect()->route('cau-hinh-tro-giup.danh-sach');
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
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        return view('cau-hinh-tro-giup.form', compact('CauHinhTroGiup'));
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
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu = $request->thu_tu;
        $cauHinhTroGiup->credit = $request->credit;
        $cauHinhTroGiup->save();
        return redirect()->route('cau-hinh-tro-giup.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->delete();
        return redirect()->route('cau-hinh-tro-giup.danh-sach');
    }
}
