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
                        <td>{{ $mau->m_taoMoi }}</td>
                        <td>{{ $mau->m_capNhat }}</td>
                        <td>
                            <form action="{{ route('backend.mau.destroy',$mau->m_ma) }}" method="POST">
                                <a class="btn btn-info" id="show-customer" data-toggle="modal" data-id="{{ $mau->m_ma }}"><i class="remixicon-settings-5-fill" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></a>
                                <a href="javascript:void(0)" class="btn btn-warning" id="edit-customer" data-toggle="modal" data-id="{{ $mau->m_ma }}"><i class="remixicon-edit-box-line" data-toggle="tooltip" data-placement="top" title="Sửa"></i> </a>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a id="delete-customer" data-id="{{ $mau->m_ma }}" class="btn btn-danger delete-user"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></a>
                                {{-- <form method="POST" action="{{ route('backend.mau.destroy',['mau' => $mau->m_ma]) }}" class="frmDelete chucNang" data-id="{{$mau->m_ma}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger" type="submit"><i class="remixicon-delete-bin-6-line" data-toggle="tooltip" data-placement="top" title="Xóa"></i></button>
                            </form> --}}
                        </td>
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
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Cập nhật:</strong>
                                <input type="text" name="m_capNhat" id="m_capNhat" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div> --}}
                        <div class="modal-footer">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
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
                    <div class="col-xs-2 col-sm-2 col-md-2"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10 ">
                        @if(isset($mau->m_ten))

                        <table>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td>{{$mau->m_ten}}</td>
                            </tr>
                            <tr>
                                <td><strong>Trạng thái:</strong></td>
                                <td>{{ $mau->m_trangThai }}</td>
                            </tr>
                            {{-- <tr>
                                <td><strong>Cập nhật:</strong></td>
                                <td>{{ $mau->m_capNhat }}</td>
                            </tr> --}}
                            {{-- <tr>
                                <td colspan="2" style="text-align: right "><a href="{{ route('backend.mau.index') }}" class="btn btn-danger">OK</a> </td>
                            </tr> --}}
                        </table>
                        @endif
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
<script>
    error = false;

    function validate() {
        if (document.custForm.m_ten.value != '' && document.custForm.m_trangThai.value != '')
            document.custForm.btnsave.disabled = false
        else
            document.custForm.btnsave.disabled = true
    }

</script>

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
                $('#m_trangThai').val(data.m_trangThai);
                //$('#m_capNhat').val(data.m_capNhat);
            })
        });
        /* Show customer */
        $('body').on('click', '#show-customer', function() {
            $('#CrudModal-show').html("Customer Details");
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
