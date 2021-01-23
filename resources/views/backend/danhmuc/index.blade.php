@extends('backend.layouts.master')

@section('title')
Danh mục
@endsection

@section('feature-title')
Danh mục
@endsection

@section('feature-description')
Danh mục
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

                <h4 class="header-title">Danh sách danh mục</h4>
                <p class="text-muted font-13 mb-4">
                    This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                    unlike the os and single options shown in other examples.
                </p>
                <a href="{{ route('backend.danhmuc.create') }}" class="btn btn-primary"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a><br><br>
                <!-- Tạo nút xem biểu mẫu khi in trên web
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `admin.danhmuc.print`
- Sẽ có dạng http://tenmiencuaban.com/admin/sanpham/print
-->
                <table id="selection-datatable" class="table dt-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Tạo mới</th>
                            <th>Cập nhật</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $danhsachdanhmuc as $danhmuc)
                        <tr>
                            <td>{{$danhmuc->dm_ma}}</td>
                            <td>{{$danhmuc->dm_ten}}</td>
                            <td>{{$danhmuc->dm_taoMoi}}</td>
                            <td>{{$danhmuc->dm_capNhat}}</td>
                            <td>
                                <?php
                                    $tenTrangThai='';
                                    if($danhmuc->dm_trangThai == 1){
                                        $tenTrangThai='Khóa';
                                    }else if($danhmuc->dm_trangThai == 2){
                                        $tenTrangThai='Còn bán';
                                    }
                                    
                                ?>
                                {{$tenTrangThai}}
                            <td>

                                <form method="POST" action="{{ route('backend.danhmuc.destroy',['danhmuc' => $danhmuc->dm_ma]) }}" class="frmDelete chucNang" data-id="{{$danhmuc->dm_ma}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                                </form>
                                <a href="{{ route('backend.danhmuc.edit',['danhmuc'=> $danhmuc->dm_ma]) }}" class="btn btn-warning"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i></a>
                                {{-- <a href="{{ route('admin.danhmuc.destroy',['danhmuc' => $danhmuc->dm_ma]) }}" class="btn btn-danger"> Xóa </a> --}}
                                <button data-url="{{ route('backend.danhmuc.show',$danhmuc->dm_ma) }}" ​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></button>

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
<!-- Show customer modal -->

<div class="modal fade" id="show" data-animation="fadein">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Thông tin sinh viên:</h2>
                id: <h1 id="id"></h1>
                Họ Tên: <h1 id="hoten"></h1>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('#selection-datatable').DataTable();
    });

</script>
<script>
    $(document).ready(function() {
        /* Show customer */
        $('.btn-show').click(function() {
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'get'
                , url: url
                , success: function(response) {
                    console.log(response)
                    $('h1#id').text(response.data.dm_ma)
                    $('h1#hoten').text(response.data.dm_ten)
                }
                , error: function(jqXHR, textStatus, errorThrown) {
                    //xử lý lỗi tại đây
                }
            })
        })
    });

</script>
<script>
    $(function() {
        //class frmDelete thêm vào chỗ nút delete
        $('.frmDelete').submit(function(e) {
            //dừng các sự kiện mặc định
            e.preventDefault();
            //lấy dữ liệu từ data-id trên form của nút xóa
            var danhmuc = $(this).data('id');
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
                            danhmuc: danhmuc
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
                            location.href = '{{ route('backend.danhmuc.index')}}'
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
