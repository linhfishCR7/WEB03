@extends('backend.layouts.master')

@section('title')
Khách hàng
@endsection
@section('feature-title')
Khách hàng
@endsection

@section('feature-description')
Cập nhật Khách hàng
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
                <h2>Cập nhật khách hàng</h2>
                <div>
                    <form action="{{route('backend.khachhang.update',['khachhang' => $kh->kh_ma])}}" method="post" name="frmUpdate" id="frmUpdate">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="kh_taiKhoan">Tên tài khoản</label>
                            <input type="text" name="kh_taiKhoan" class="form-control" id="kh_taiKhoan" value="{{ old('kh_taiKhoan', $kh->kh_taiKhoan) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_matKhau">Mật khẩu</label>
                            <input type="text" name="kh_matKhau" class="form-control" id="kh_matKhau" value="{{ old('kh_matKhau', $kh->kh_matKhau) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_hoTen">Họ tên</label>
                            <input type="text" name="kh_hoTen" class="form-control" id="kh_hoTen" value="{{ old('kh_hoTen', $kh->kh_hoTen) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_gioiTinh">Giới tính</label>
                            <input type="text" name="kh_gioiTinh" class="form-control" id="kh_gioiTinh" value="{{ old('kh_gioiTinh', $kh->kh_gioiTinh) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_email">Email</label>
                            <input type="text" name="kh_email" class="form-control" id="kh_email" value="{{ old('kh_email', $kh->kh_email) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_ngaySinh">Ngày sinh</label>
                            <input type="text" name="kh_ngaySinh" class="form-control" id="kh_ngaySinh" value="{{ old('kh_ngaySinh', $kh->kh_ngaySinh) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_diaChi">Địa chỉ</label>
                            <input type="text" name="kh_diaChi" class="form-control" id="kh_diaChi" value="{{ old('kh_diaChi', $kh->kh_diaChi) }}">
                        </div>
                        <div class="form-group">
                            <label for="kh_dienThoai">Số điện thoại</label>
                            <input type="text" name="kh_dienThoai" class="form-control" id="kh_dienThoai" value="{{ old('kh_dienThoai', $kh->kh_dienThoai) }}">
                        </div>

                        <div class="form-group">
                            <label for="kh_trangThai">Trạng thái</label>
                            <select name="kh_trangThai" id="kh_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('kh_trangThai',$kh->kh_trangThai) == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('kh_trangThai',$kh->kh_trangThai) == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.khachhang.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
