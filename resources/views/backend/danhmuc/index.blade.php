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
                <a href="#" class="btn btn-primary btn-lg" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add new</a><br><br><br>

                <table id="example" class="table table-striped table-responsive table-bordered">
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
                                $tenTrangThai = '';
                                if ($danhmuc->dm_trangThai == 1) {
                                    $tenTrangThai = 'Khóa';
                                } else if ($danhmuc->dm_trangThai == 2) {
                                    $tenTrangThai = 'Kích hoạt';
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

                <h2>Thông tin danh mục</h2>

                <div class="row">
                    <div class="col-md-4">
                        <label for="">ID:</label>
                    </div>
                    <div class="col-md-8">
                        <h3 id="id"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Name:</label>
                    </div>
                    <div class="col-md-8">
                        <h3 id="hoten"></h3>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('backend.danhmuc.store')}}" method="post">
                {{csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="dm_ten">Danh mục</label>
                        <input type="text" class="form-control" id="dm_ten" name="dm_ten" placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="dm_trangThai">Trạng thái</label>
                        <select name="dm_trangThai" id="dm_trangThai" class="form-control form-control-lg">
                            <option value="1" {{old('dm_trangThai') == 1 ? 'selected': ''}}>Khóa</option>
                            <option value="2" {{old('dm_trangThai') == 2 ? 'selected': ''}}>Kích hoạt</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('custom-scripts')
<script>
    // $(document).ready(function() {
    //     $('#selection-datatable').DataTable();
    // });
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        /* Show customer */
        $('.btn-show').click(function() {
            var url = $(this).attr('data-url');
            $.ajax({

                type: 'get',
                url: url,
                success: function(response) {
                    //console.log(response)
                    $('#id').text(response.data.dm_ma)
                    $('#hoten').text(response.data.dm_ten)

                },
                error: function(jqXHR, textStatus, errorThrown) {
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
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
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
                            danhmuc: danhmuc,
                            _token: $(this).find('[name=_token').val(),
                            _method: $(this).find('[name=_method').val(),

                        },
                        //dataType: 'JSON'
                        // success hay fail có hay không cũng không sao
                        success: function(data, textStatus, jqXHR) {
                            //load lại trang khi đã xóa
                            Swal.fire(
                                'Deleted!', 'Your file has been deleted.', 'success'
                            );
                            location.href = '{{ route('backend.danhmuc.index')}}'
                        },
                        error: function(jqXHR, textStatus, errorThrown) {},
                    });

                } else {
                    Swal.fire(
                        'Cancelled!', 'Your imaginary file is safe :)', 'error'
                    );
                }
            })
            ///
        });

    });
</script>

@endsection