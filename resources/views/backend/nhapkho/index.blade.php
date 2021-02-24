@extends('backend.layouts.master')

@section('title')
Phiếu nhập kho
@endsection

@section('feature-title')
Phiếu nhập kho
@endsection

@section('feature-description')
Phiếu nhập kho
@endsection

@section('custom-css')
<style>
    .chucNang {
        float: left;
        margin-right: 5px;
    }



</style>
@endsection

@section('content')

@if(Session::has('status'))
<div class="alert alert-primary" role="alert">
    {{ Session::get('status')}}
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Danh sách phiếu nhập kho</h4>
                <p class="text-muted font-13 mb-4"></p>
                <div class="pull-right">
                    {{-- <a href="{{ route('backend.phieunhap.create') }}" class="btn btn-primary mb-2"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a> --}}
                    {{-- <a href="{{ route('backend.phieunhap.pdf') }}" class="btn btn-danger mb-2"><i class="mdi mdi-file-pdf" data-toggle="tooltip" data-placement="top" title="PDF"></i></a> --}}
                    {{-- <a href="{{ route('backend.phieunhap.excel') }}" class="btn btn-primary mb-2"><i class="remixicon-file-excel-2-line" data-toggle="tooltip" data-placement="top" title="EXCEL"></i></a> --}}
                </div>

                <table id="selection-datatable" class="table dt-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Người giao</th>
                            <th>Số hóa đơn</th>
                            <th>Ngày xuất hóa đơn</th>
                            <th>Ghi chú</th>
                            <th>Người lập phiếu</th>
                            <th>Ngày Lập phiếu</th>
                            <th>Kế toán</th>
                            <th>Ngày xác nhận</th>
                            <th>Thủ kho</th>
                            <th>Ngày nhập kho</th>
                            <th>Nhà cung cấp</th>
                            <th>Tạo mới</th>
                            <th>Cập nhật</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($dsphieunhap as $phieunhap)
                        <tr>
                            <td>{{ $phieunhap->pn_ma }}</td>
                            <td>{{ $phieunhap->pn_nguoiGiao }}</td>
                            <td>{{ $phieunhap->pn_soHoaDon }}</td>
                            <td>{{ $phieunhap->pn_ngayXuatHoaDon }}</td>
                            <td>{{ $phieunhap->pn_ghiChu }}</td>
                            <td>{{ $phieunhap->phieuNhap_nhanVienLapPhieu->name }}</td>
                            <td>{{ $phieunhap->pn_ngayLapPhieu }}</td>
                            <td>{{ $phieunhap->phieuNhap_nhanVienKeToan->name }}</td>
                            <td>{{ $phieunhap->pn_ngayXacNhan }}</td>
                            <td>{{ $phieunhap->phieuNhap_nhanVienThuKho->name }}</td>
                            <td>{{ $phieunhap->pn_ngayNhapKho }}</td>
                            <td>{{ $phieunhap->nhaCungCap->ncc_ten }}</td>
                            <td>{{ $phieunhap->pn_taoMoi }}</td>
                            <td>{{ $phieunhap->pn_capNhat }}</td>
                            <td>
                                <form method="POST" action="{{ route('backend.phieunhap.destroy',['phieunhap' => $phieunhap->pn_ma]) }}" class="frmDelete chucNang" data-id="{{$phieunhap->pn_ma}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                                </form>
                                <a href="{{ route('backend.phieunhap.edit',['phieunhap' => $phieunhap->pn_ma]) }}" class="btn btn-warning"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i></a>
                                <a href="{{ route('backend.phieunhap.show',$phieunhap->pn_ma) }}" class="btn btn-info"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></a>
                                <a href="{{ route('backend.phieunhap.print',$phieunhap->pn_ma) }}" class="btn btn-info mb-2"><i class="remixicon-printer-line" data-toggle="tooltip" data-placement="top" title="IN"></i></a>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
</div>
@endsection



@section('custom-scripts')

<script>
    $(document).ready(function() {
        $('#selection-datatable').DataTable();
    });

</script>
<script>
    $(function() {
        //class frmDelete thêm vào chỗ nút delete
        $('.frmDelete').submit(function(e) {
            //dừng các sự kiện mặc định
            e.preventDefault();
            //lấy dữ liệu từ data-id trên form của nút xóa
            var phieunhap = $(this).data('id');
            //debugger;
            Swal.fire({
                title: 'Are you sure?'
                , text: "You won't be able to revert this!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) { //nếu yes thì sử lý
                    //hàm lấy tất cả dữ liệu
                    //xóa dữ liệu dạng điều hướng
                    //var sendData = $(this).serialize();

                    //gửi yêu câu đi
                    $.ajax({
                        type: $(this).attr('method'), //loại gửi đi post,get....
                        url: $(this).attr('action'), //đường dẫn đến nới xóa dữ liệu
                        //data: sendData,
                        //gửi dữ liệu bằng tay

                        data: {
                            //id là phải cùng với para trong action destroy
                            phieunhap: phieunhap
                            , _token: $(this).find('[name=_token').val()
                            , _method: $(this).find('[name=_method').val(),

                        },
                        //dataType: 'JSON'
                        // success hay fail có hay không cũng không sao
                        success: function(data, textStatus, jqXHR) {
                            //load lại trang khi đã xóa
                            Swal.fire(
                                'Deleted!'
                                , 'Your file has been deleted.'
                                , 'success'
                            );
                            location.href = '{{ route('backend.phieunhap.index')}}'
                        }
                        , error: function(jqXHR, textStatus, errorThrown) {}
                    , });

                } else {
                    Swal.fire(
                        'Cancelled!'
                        , 'Your imaginary file is safe :)'
                        , 'error'
                    );
                }
            })
            ///
        });

    });

</script>

@endsection
