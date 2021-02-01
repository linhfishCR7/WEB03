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
                    <a href="javascript:void(0)" class="btn btn-success mb-2" id="new-customer" data-toggle="modal"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a>
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
                        @foreach ($sanpham as $sanpham)
                        <tr id="customer_id_{{ $sanpham->sp_ma }}">
                            <td>{{ $sanpham->sp_ma }}</td>
                            <td>{{ $sanpham->sp_ten }}</td>
                            <td>{{ $sanpham->sp_giaGoc }}</td>
                            <td>{{ $sanpham->sp_giaBan }}</td>
                            <td><img src="{{ asset('storage/upload/'.$sanpham->sp_hinh) }}" alt="hinh san pham" class="img-fluid img-hinhdaidien" ></td>
                            <td>{{ $sanpham->sp_thongTin }}</td>
                            <td>{{ $sanpham->sp_danhGia }}</td>
                            <td>{{ $sanpham->loaisanpham->l_ten }}</td>
                            <td>{{ $sanpham->sp_taoMoi }}</td>
                            <td>{{ $sanpham->sp_capNhat }}</td>
                            <td>
                                <form action="{{ route('backend.sanpham.destroy',$sanpham->sp_ma) }}" method="POST">
                                    <a class="btn btn-info" id="show-customer" data-toggle="modal" data-id="{{ $sanpham->sp_ma }}"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-warning" id="edit-customer" data-toggle="modal" data-id="{{ $sanpham->sp_ma }}"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i> </a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a id="delete-customer" data-id="{{ $sanpham->sp_ma }}" class="btn btn-danger delete-user"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></a>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $mau->links() !!} --}}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<!-- Add and Edit customer modal -->
{{-- <div class="modal fade" id="crud-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="custForm" action="{{ route('backend.sanpham.store') }}" method="POST">
                    <input type="hidden" name="m_ma" id="m_ma">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="m_ten" id="m_ten" class="form-control" placeholder="Name" onchange="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Trạng thái:</strong>
                                <input type="text" name="m_trangThai" id="m_trangThai" class="form-control" placeholder="Trạng thái" onchange="validate()">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div> --}}
<!-- Show customer modal -->
<div class="modal fade" id="crud-modal-show" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CrudModal-show"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-body">
                            @if(isset($sanpham->sp_ten))
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $sanpham->sp_ma }}</td>
                                </tr>
                                <tr>
                                    <th>Tên</th>
                                    <td>{{ $sanpham->sp_ten }}</td>
                                </tr>
                                <tr>
                                    <th>Giá góc</th>
                                    <td>{{ $sanpham->sp_giaGoc }}</td>
                                </tr>
                                <tr>
                                    <th>Giá bán</th>
                                    <td>{{ $sanpham->sp_giaBan }}</td>
                                </tr>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <td><img src="{{ asset('storage/upload/'.$sanpham->sp_hinh) }}" alt="hinh san pham" class="img-fluid" ></td>
                                </tr>
                                <tr>
                                    <th>Thông tin</th>
                                    <td>{{ $sanpham->sp_thongTin }}</td>
                                </tr>
                                <tr>
                                    <th>Đánh giá</th>
                                    <td>{{ $sanpham->sp_danhGia }}</td>
                                </tr>
                                <tr>
                                    <th>Loại</th>
                                    <td>{{ $sanpham->loaisanpham->l_ten }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Trạng thái:</strong></td>
                                    <td>
                                        <?php
                                            $tenTrangThai='';
                                            if($sanpham->sp_trangThai == 1){
                                                $tenTrangThai='Khóa';
                                            }else if($sanpham->sp_trangThai == 2){
                                                $tenTrangThai='Còn bán';
                                            }
                                        ?>
                                    {{$tenTrangThai}}
                                    <td>                                      
                                </tr>                                                                                                                                                                                                                                                          
                            </table>
                            @endif
                        </div>
                    </div>

                </div>
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
    $(document).ready(function() {
        /* When click New customer button */
        $('#new-customer').click(function() {
            $('#btn-save').val("create-customer");
            $('#customer').trigger("reset");
            $('#CrudModal').html("Add New Customer");
            $('#crud-modal').modal('show');
        });

        /* Edit customer */
        $('body').on('click', '#edit-customer', function() {
            var sp_ma = $(this).data('id');
            $.get('sanpham/' + sp_ma + '/edit', function(data) {
                $('#CrudModal').html("Edit product");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#crud-modal').modal('show');
                $('#sp_ma').val(data.sp_ma);
                $('#sp_giaGoc').val(data.sp_giaGoc);
                $('#sp_giaBan').val(data.sp_giaBan);
                $('#sp_hinh').val(data.sp_hinh);
                $('#sp_thongTin').val(data.sp_thongTin);
                $('#sp_danhGia').val(data.sp_danhGia);
                $('#l_ma').val(data.l_ma);
                $('#sp_trangThai').val(data.sp_trangThai);
                //$('#m_capNhat').val(data.m_capNhat);
            })
        });
        /* Show customer */
        $('body').on('click', '#show-customer', function() {
            $('#CrudModal-show').html("Prodcut Details");
            $('#crud-modal-show').modal('show');
        });

        /* Delete customer */
        $('body').on('click', '#delete-customer', function(e) {

            e.preventDefault();
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            //confirm("Are You sure want to delete !");
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
                    $.ajax({
                        type: "DELETE"
                        , url: '{{ route('backend.sanpham.destroy',['sanpham' => $sanpham->sp_ma ]) }}'
                        , data: {
                            "id": id
                            , "_token": token
                        , }
                        , success: function(data, textStatus, jqXHR) {
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
        });
    });

</script>

@endsection
