@extends('backend.layouts.master')

@section('title')
Sản phẩm
@endsection

@section('feature-title')
Sản phẩm
@endsection

@section('feature-description')
Sản phẩm
@endsection

@section('custom-css')
<style>
    .chucNang {
        float: left;
        margin-right: 5px;
    }

    .img-hinhdaidien {
        width: 100px;
        height: 100px;
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

                <h4 class="header-title">Danh sách sản phẩm</h4>
                <p class="text-muted font-13 mb-4">
                    This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                    unlike the os and single options shown in other examples.
                </p>
                <div class="pull-right">
                    <a href="{{ route('backend.sanpham.create') }}" class="btn btn-primary mb-2"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a>
                    <a href="{{ route('backend.sanpham.print') }}" class="btn btn-info mb-2"><i class="remixicon-printer-line" data-toggle="tooltip" data-placement="top" title="IN"></i></a>
                    <a href="{{ route('backend.sanpham.pdf') }}" class="btn btn-danger mb-2"><i class="mdi mdi-file-pdf" data-toggle="tooltip" data-placement="top" title="PDF"></i></a>
                    <a href="{{ route('backend.sanpham.excel') }}" class="btn btn-primary mb-2"><i class="remixicon-file-excel-2-line" data-toggle="tooltip" data-placement="top" title="EXCEL"></i></a>
                </div>

                <table id="selection-datatable" class="table dt-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá góc</th>
                            <th>Giá bán</th>
                            <th>Hình ảnh</th>
                            <th>Thông tin</th>
                            <th>Đánh giá</th>
                            <th>Loại</th>
                            <th>tạo mới</th>
                            <th>cập nhật</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sanpham1 as $sanpham)
                        <tr id="customer_id_{{ $sanpham->sp_ma }}">
                            <td>{{ $sanpham->sp_ma }}</td>
                            <td>{{ $sanpham->sp_ten }}</td>
                            <td>{{ $sanpham->sp_giaGoc }}</td>
                            <td>{{ $sanpham->sp_giaBan }}</td>
                            <td><img src="{{ asset('storage/upload/'.$sanpham->sp_hinh) }}" alt="hinh san pham" class="img-fluid img-hinhdaidien"></td>
                            <td>{{ $sanpham->sp_thongTin }}</td>
                            <td>{{ $sanpham->sp_danhGia }}</td>
                            <td>{{ $sanpham->loaisanpham->l_ten }}</td>
                            <td>{{ $sanpham->sp_taoMoi }}</td>
                            <td>{{ $sanpham->sp_capNhat }}</td>
                            <td>
                                <form method="POST" action="{{ route('backend.sanpham.destroy',['sanpham' => $sanpham->sp_ma]) }}" class="frmDelete chucNang" data-id="{{$sanpham->sp_ma}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                                </form>
                                <a href="{{ route('backend.sanpham.edit',['sanpham' => $sanpham->sp_ma]) }}" class="btn btn-warning"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i></a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
        {{ $sanpham1->links() }}
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

{{-- <script>
    error = false;

    function validate() {
        if (document.custForm.m_ten.value != '' && document.custForm.m_trangThai.value != '')
            document.custForm.btnsave.disabled = false
        else
            document.custForm.btnsave.disabled = true
    }

</script> --}}
<script>
    $(function() {
        //class frmDelete thêm vào chỗ nút delete
        $('.frmDelete').submit(function(e) {
            //dừng các sự kiện mặc định
            e.preventDefault();
            //lấy dữ liệu từ data-id trên form của nút xóa
            var sanpham = $(this).data('id');
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
                            sanpham: sanpham
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
                            location.href = '{{ route('backend.sanpham.index')}}'
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
