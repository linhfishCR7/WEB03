@extends('backend.layouts.master')

@section('title')
Màu
@endsection

@section('feature-title')
Màu
@endsection

@section('feature-description')
Màu
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
                <div class="pull-right">
                    <a href="javascript:void(0)" class="btn btn-success mb-2" id="new-customer" data-toggle="modal"><i class="remixicon-file-add-line" data-toggle="tooltip" data-placement="top" title="Thêm mới"></i></a></a>
                </div>

                <table id="selection-datatable" class="table dt-responsive nowrap my-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Trạng thái</th>
                            <th>tạo mới</th>
                            <th>cập nhật</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mau as $mau)
                        <tr id="customer_id_{{ $mau->m_ma }}">
                            <td>{{ $mau->m_ma }}</td>
                            <td>{{ $mau->m_ten }}</td>
                            <td>{{ $mau->m_trangThai }}</td>
                            <td>{{ $mau->m_taoMoi }}</td>
                            <td>{{ $mau->m_capNhat }}</td>
                            <td>
                                <form action="{{ route('backend.mau.destroy',$mau->m_ma) }}" method="POST">
                                    <a href="javascript:void(0)" class="btn btn-info" id="show-customer" data-toggle="modal" data-id="{{ $mau->m_ma }}"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-warning" id="edit-customer" data-toggle="modal" data-id="{{ $mau->m_ma }}"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i> </a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a id="delete-customer" data-id="{{ $mau->m_ma }}" class="btn btn-danger delete-user"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></a>
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
<div class="modal fade" id="crud-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="custForm" action="{{ route('backend.mau.store') }}" method="POST">
                    <input type="hidden" name="m_ma" id="m_ma">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Màu:</label>
                                <input type="text" name="m_ten" id="m_ten" class="form-control" placeholder="Name" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="hex-colorpicker">Màu Hexan:</label>
                                <input type="text" name="hex_colorpicker" value="#4a81d4" id="hex-colorpicker" class="form-control" placeholder="Hexan" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="m_trangThai">Chọn trạng thái: </label>
                                <select name="m_trangThai" id="m_trangThai" class="form-control" >
                                <option value="1" {{old('m_trangThai') == 1 ? 'selected': ''}}>Khóa</option>
                                <option value="2" {{old('m_trangThai') == 2 ? 'selected': ''}}>Kich hoạt</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" >Submit</button>
                            {{-- <a href="{{ route('backend.mau.index') }}" class="btn btn-danger">Cancel</a> --}}
                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
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
                            <div class="form-group">
                                <label for="m_ma1">ID:</label>
                                <input type="text" name="m_ma1" id="m_ma1" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="m_ten1">Màu:</label>
                                <input type="text" name="m_ten1" id="m_ten1" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="m_hexan1">Màu Hexan:</label>
                                <input type="text" name="m_hexan1" id="m_hexan1" class="form-control"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="m_trangThai1">Trạng thái:</label>
                                <input type="text" name="m_trangThai1" id="m_trangThai1" class="form-control" disabled>
                            </div>
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
        if (document.custForm.m_ten.value != '' && document.custForm.m_trangThai.value != ''&& document.custForm.hex-colorpicker.value != '')
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
            var m_ma = $(this).data('id');
            $.get('mau/' + m_ma + '/edit', function(data) {
                $('#CrudModal').html("Edit Mau");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#crud-modal').modal('show');
                $('#m_ma').val(data.m_ma);
                $('#m_ten').val(data.m_ten);
                $('#m_hexan').val(data.m_hexan);
                $('#m_trangThai option:selected').text(data.m_trangThai);
            })
        });

        /* Show customer */
        $('body').on('click', '#show-customer', function() {
            var m_ma = $(this).data('id');
            $.get('mau/' + m_ma, function(data) {
                $('#CrudModal-show').html("Show Mau");
                $('#crud-modal-show').modal('show');
                $('#m_ma1').val(data.m_ma);
                $('#m_ten1').val(data.m_ten);
                $('#m_hexan1').val(data.m_hexan);
                $('#m_trangThai1').val(data.m_trangThai);
            })
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
                        , url: '{{ route('backend.mau.destroy',['mau' => $mau->m_ma ]) }}'
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
                            location.href = '{{ route('backend.mau.index')}}'
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
