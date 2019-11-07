@extends('layout')
@section('main-content')
  <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($lichSuMuaCredit)) Cập nhật @else Thêm @endif Lịch sử mua credit</h4>
                @if(isset($lichSuMuaCredit))
                <form action="{{ route('lich-su-mua-credit.xu-ly-cap-nhat', ['id' =>$lichSuMuaCredit ->id]) }}" method="POST">
                @else

                <form action="{{ route('lich-su-mua-credit.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="nguoi_choi_id">Người chơi</label>
                        <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" @if(isset($lichSuMuaCredit)) value="{{ $lichSuMuaCredit->nguoi_choi_id}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="goi_credit">Gói Credit</label>
                        <input type="text" class="form-control" id="goi_credit" name="goi_credit" @if(isset($lichSuMuaCredit)) value="{{ $lichSuMuaCredit->goi_credit}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($lichSuMuaCredit)) value="{{ $lichSuMuaCredit->credit}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="so_tien">Số tiền</label>
                        <input type="text" class="form-control" id="so_tien" name="so_tien" @if(isset($lichSuMuaCredit)) value="{{ $lichSuMuaCredit->so_tien}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($lichSuMuaCredit)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

  </div>
                <!-- end row -->
@endsection