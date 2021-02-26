@extends('backend.layouts.master')

@section('title')
Chi tiết phiếu nhập kho
@endsection

@section('feature-title')
Chi tiết phiếu nhập kho
@endsection

@section('feature-description')
Chi tiết phiếu nhập kho
@endsection

@section('custom-css')
<style>
    .chucNang {
        float: left;
        margin-right: 5px;
    }

    .size-title {
        font-size: 20px;
        font-weight: 20px;
    }

    .size-text {
        font-size: 17px;
        font-weight: 15px;
    }

</style>
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Chi tiết phiếu nhập kho #{{$phieunhap->pn_ma}}</h4>
                <p class="text-muted font-13 mb-4"></p>
                <a href="{{ route('backend.phieunhap.print',$phieunhap->pn_ma) }}" class="btn btn-info mb-2"><i class="remixicon-printer-line" data-toggle="tooltip" data-placement="top" title="IN"></i></a>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="size-title">Số phiếu: </label>&nbsp;
                            <span class="size-text">#{{ $phieunhap->pn_ma }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Người giao: </label>&nbsp;
                            <span>{{ $phieunhap->pn_nguoiGiao }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Số hóa đơn: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_soHoaDon }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Ngày xuất hóa đơn: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_ngayXuatHoaDon }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Ghi chú: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_ghiChu }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Nhân viên lập phiếu: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->phieuNhap_nhanVienLapPhieu->name }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Ngày lập phiếu: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_ngayLapPhieu }}</span>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="size-title">Nhân viên kế toán: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->phieuNhap_nhanVienKeToan->name }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Ngày xác nhận: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_ngayXacNhan }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Nhân viên thủ kho: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->phieuNhap_nhanVienThuKho->name }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Ngày nhập kho: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->pn_ngayNhapKho }}</span>
                        </div>
                        <div class="form-group">
                            <label class="size-title">Nhà cung cấp: </label>&nbsp;
                            <span class="size-text">{{ $phieunhap->nhaCungCap->ncc_ten }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <table id="selection-datatable" class="table table-bordered nowrap my-3">
                            <thead>
                                <tr class="table-primary">
                                    <th>Sản phẩm mã</th>
                                    <th>Mã màu</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chitietnhap as $chitietnhap)
                                <tr>
                                    {{-- <td>{{ $chitietnhap->sanPham->sp_ten}}</td> --}}
                                    <td>{{ $chitietnhap->sp_ma}}</td>
                                    <td>{{ $chitietnhap->mau->m_ten }}</td>
                                    <td>{{ $chitietnhap->ctn_soLuong }}</td>
                                    <td>{{ $chitietnhap->ctn_donGia }}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
</div>
@endsection



@section('custom-scripts')

{{-- <script>
    $(document).ready(function() {
        $('#selection-datatable').DataTable();
    });

</script> --}}
@endsection
