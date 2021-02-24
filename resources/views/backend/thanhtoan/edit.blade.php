@extends('backend.layouts.master')

@section('title')
Thanh toán
@endsection
@section('feature-title')
Thanh toán
@endsection

@section('feature-description')
Cập nhật Thanh toán
@endsection
@section('custom-css')
<style>
    .error {
        color: red;
    }
    .valid {
        color: green;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Cập nhật thanh toán</h2>
                <div>
                    <form action="{{route('backend.thanhtoan.update',['thanhtoan' => $tt->tt_ma])}}" method="post" name="frmUpdate" id="frmUpdate">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="tt_ten">Tên thanh toán</label>
                            <input type="text" name="tt_ten" class="form-control" id="tt_ten" value="{{ old('tt_ten', $tt->tt_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="tt_dienGiai">Diễn giải</label>
                            <input type="text" name="tt_dienGiai" class="form-control" id="tt_dienGiai" value="{{ old('tt_dienGiai', $tt->tt_dienGiai) }}">
                        </div>
                        <div class="form-group">
                            <label for="tt_trangThai">Trạng thái</label>
                            <select name="tt_trangThai" id="tt_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('tt_trangThai',$tt->tt_trangThai) == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('tt_trangThai',$tt->tt_trangThai) == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.thanhtoan.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
