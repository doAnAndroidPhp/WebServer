@extends('layout')
@section('main-content')
  <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($quanTriVien)) Cập nhật @else Thêm @endif Quản Trị Viên</h4>
                @if(isset($quanTriVien))
                <form action="{{ route('quan-tri-vien.xu-ly-cap-nhat', ['id' =>$quanTriVien ->id]) }}" method="POST">
                @else

                <form action="{{ route('quan-tri-vien.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($quanTriVien)) value="{{ $quanTriVien->ten_dang_nhap}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" @if(isset($quanTriVien)) value="{{ $quanTriVien->mat_khau}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($quanTriVien)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

  </div>
                <!-- end row -->
@endsection