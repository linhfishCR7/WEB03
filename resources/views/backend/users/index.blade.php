@extends('backend.layouts.master')

@section('title')
User
@endsection

@section('feature-title')
User
@endsection

@section('feature-description')
User
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

                <h4 class="header-title">List User</h4>
                <p class="text-muted font-13 mb-4">
                    This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                    unlike the os and single options shown in other examples.
                </p>
                {{-- <a href="{{ route('backend.user.create') }}" class="btn btn-primary"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a><br><br> --}}

                <table id="selection-datatable" class="table dt-responsive table-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Tài khoản</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Vai trò</th>
                            <th>Tạo mới</th>
                            <th>Cập nhật</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $users as $user)
                        <tr>
                            <td>{{$user['id']}}</td>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['username']}}</td>
                            <td>{{$user['genre']}}</td>
                            <td>{{$user['birthday']}}</td>
                            <td>{{$user['phone']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>{{$user['address']}}</td>
                            <td>{{implode(', ',$user->quyens()->get()->pluck('q_ten')->toArray())}}</td>
                            <td>{{$user['created_at']}}</td>
                            <td>{{$user['updated_at']}}</td>
                            <td>
                                <?php
                                    $tenTrangThai='';
                                    if($user['active'] == 0){
                                        $tenTrangThai='Block';
                                    }else if($user['active'] == 1){
                                        $tenTrangThai='Active';
                                    }
                                    
                                ?>
                                {{$tenTrangThai}}
                            <td>
                                @can('edit-users', $user)

                                <form method="POST" action="{{ route('backend.user.destroy',$user->id) }}" class="frmDelete chucNang" data-id="{{$user->id}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                                </form>
                                @endcan
                                @can('delete-users', $user)
                                <a href="{{ route('backend.user.edit',$user->id) }}" class="btn btn-warning "><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i></a>
                                {{-- <button data-url="{{ route('backend.user.show',$user->id) }}" ​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></button> --}}
                                @endcan
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
        {{ $users->links() }}

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

@endsection

@section('custom-scripts')
{{-- <script>
    $(document).ready(function() {
        $('#selection-datatable').DataTable();
    });

</script> --}}
{{-- <script>
    $(document).ready(function() {
        /* Show customer */
        $('.btn-show').click(function() {
            var url = $(this).attr('data-url');
            $.ajax({
                
                type: 'get'
                , url: url 
                , success: function(response) {
                    //console.log(response)
                    $('#id').text(response.data.dm_ma)
                    $('#hoten').text(response.data.dm_ten)
                    
                }
                , error: function(jqXHR, textStatus, errorThrown) {
                    //xử lý lỗi tại đây
                }
            })
        })
    });

</script>--}}
<script>
    $(function() {
        //class frmDelete thêm vào chỗ nút delete
        $('.frmDelete').submit(function(e) {
            //dừng các sự kiện mặc định
            e.preventDefault();
            //lấy dữ liệu từ data-id trên form của nút xóa
            var user = $(this).data('id');
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
                            user: user
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
                            location.href = '{{ route('backend.user.index')}}'
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
