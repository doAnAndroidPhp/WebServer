@extends('layout')
@section('main-content')
  <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($chiTietLuotChoi)) Cập nhật @else Thêm @endif Chi Tiết Lượt Chơi</h4>
                @if(isset($chiTietLuotChoi))
                <form action="{{ route('chi-tiet-luot-choi.xu-ly-cap-nhat', ['id' =>$chiTietLuotChoi ->id]) }}" method="POST">
                @else

                <form action="{{ route('chi-tiet-luot-choi.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="luot_choi_id">Lượt chơi</label>
                        <input type="text" class="form-control" id="luot_choi_id" name="luot_choi_id" @if(isset($chiTietLuotChoi)) value="{{ $chiTietLuotChoi->luot_choi_id}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="cau_hoi_id">Câu hỏi</label>
                        <input type="text" class="form-control" id="cau_hoi_id" name="cau_hoi_id" @if(isset($chiTietLuotChoi)) value="{{ $chiTietLuotChoi->cau_hoi_id}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="phuong_an">Phương án</label>
                        <input type="text" class="form-control" id="phuong_an" name="phuong_an" @if(isset($chiTietLuotChoi)) value="{{ $chiTietLuotChoi->phuong_an}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="diem">Điểm</label>
                        <input type="text" class="form-control" id="diem" name="diem" @if(isset($chiTietLuotChoi)) value="{{ $chiTietLuotChoi->diem}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($chiTietLuotChoi)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

  </div>
                <!-- end row -->
@endsection