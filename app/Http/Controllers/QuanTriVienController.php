<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;

class QuanTriVienController extends Controller
{
    public function index()
    {
        $listquanTriVien = QuanTriVien::all(); 
        return view('quan-tri-vien.danh_sach', compact('listquanTriVien'));
    }
    public function hienThiFormDangNhap()
    {
       return view('dang-nhap');
    }
    public function dangXuat()
    {
        auth('web')->logout();
        redirect()->route('dang-nhap');
    }
    public function xuLyDangNhap( Request $req)
    {
       $credentials = [
            'ten_dang_nhap' => $req->ten_dang_nhap,
            'password'      => $req->mat_khau
        ];

        if(!auth('web')->attempt($credentials)){
            return 'Dang nhap khong thanh cong';
        }

        return redirect()->route('trang-chu');
    }
    
    public function create()
    {
        return view('quan-tri-vien.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quanTriVien = new QuanTriVien;
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = $request->mat_khau;
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach');
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
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.form', compact('quanTriVien'));
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
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->delete();
        return redirect()->route('quan-tri-vien.danh-sach');
    }
}
