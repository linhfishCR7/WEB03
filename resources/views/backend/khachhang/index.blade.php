@extends('backend.layouts.master')

@section('title')
Khách hàng
@endsection

@section('feature-title')
Khách hàng
@endsection

@section('feature-description')
Khách hàng
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

                <h4 class="header-title">Danh sách khách hàng</h4>
                <p class="text-muted font-13 mb-4"></p>
                <a href="{{ route('backend.khachhang.create') }}" class="btn btn-primary"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a><br><br>
                <table id="selection-datatable" class="table dt-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Tên</th>
                            <th>Giới tính</th>
                            <th>Email</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Tạo mới</th>
                            <th>Cập nhật</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $danhsachkhachhang as $khachhang)
                        <tr>
                            <td>{{$khachhang->kh_ma}}</td>
                            <td>{{$khachhang->kh_taiKhoan}}</td>
                            <td>{{$khachhang->kh_matKhau}}</td>
                            <td>{{$khachhang->kh_hoTen}}</td>
                            <td>{{$khachhang->kh_gioiTinh}}</td>
                            <td>{{$khachhang->kh_email}}</td>
                            <td>{{$khachhang->kh_ngaySinh}}</td>
                            <td>{{$khachhang->kh_diaChi}}</td>
                            <td>{{$khachhang->kh_dienThoai}}</td>
                            <td>{{$khachhang->kh_taoMoi}}</td>
                            <td>{{$khachhang->kh_capNhat}}</td>
                            <td>
                                <?php
                                    $tenTrangThai='';
                                    if($khachhang->kh_trangThai == 1){
                                        $tenTrangThai='BLOCK';
                                    }else if($khachhang->kh_trangThai == 2){
                                        $tenTrangThai='ACTIVE';
                                    }
                                    
                                ?>
                                {{$tenTrangThai}}
                            <td>

                                <form method="POST" action="{{ route('backend.khachhang.destroy',['khachhang' => $khachhang->kh_ma]) }}" class="frmDelete chucNang" data-id="{{$khachhang->kh_ma}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                                </form>
                                <a href="{{ route('backend.khachhang.edit',['khachhang'=> $khachhang->kh_ma]) }}" class="btn btn-warning"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
        {{-- {{ $danhsachkhachhang->links() }} --}}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

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
            var khachhang = $(this).data('id');
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
                            khachhang: khachhang
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
                            location.href = '{{ route('backend.khachhang.index')}}'
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
