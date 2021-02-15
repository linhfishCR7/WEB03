@extends('backend.layouts.master')

@section('title')
Sản phẩm
@endsection
@section('feature-title')
Sản phẩm
@endsection

@section('feature-description')
Cập nhật Sản phẩm
@endsection
@section('custom-css')
<style>
    .error {
        color: red;
    }

    .valid {
        color: green;
    }

</style>
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row" novalidate>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Cập nhật sản phẩm</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.sanpham.store')}}" method="post" name="frmCreate" id="frmCreate" ng-submit="submitForm()" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="sp_ten">Tên sản phẩm</label>
                            <input type="text" name="sp_ten" class="form-control" id="sp_ten" ng-model="sp_ten" ng-minlength="4" ng-maxlength="20" ng-required="true" value="{{ old('sp_ten' )}}">
                            <span class="error" ng-show="frmCreate.sp_ten.$error.required">Vui lòng nhập tên</span>
                            <span class="error" ng-show="frmCreate.sp_ten.$error.minlength">Tên ít nhất 4 kí tự</span>
                            <span class="error" ng-show="frmCreate.sp_ten.$error.maxlength">Tên nhỏ hơn 20 kí tự</span>
                            <span class="valid" ng-show="frmCreate.sp_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="sp_giaGoc">Giá góc</label>
                            <input type="text" name="sp_giaGoc" class="form-control" id="sp_giaGoc" ng-model="sp_giaGoc" ng-required="true" value="{{ old('sp_giaGoc')}}">
                            <span class="error" ng-show="frmCreate.sp_giaGoc.$error.required">Vui lòng nhập giá góc</span>
                            <span class="valid" ng-show="frmCreate.sp_giaGoc.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="sp_giaBan">Giá bán</label>
                            <input type="text" name="sp_giaBan" class="form-control" id="sp_giaBan" ng-model="sp_giaBan" ng-required="true" value="{{ old('sp_giaBan') }}">
                            <span class="error" ng-show="frmCreate.sp_giaBan.$error.required">Vui lòng nhập giá bán</span>
                            <span class="valid" ng-show="frmCreate.sp_giaBan.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="sp_hinh">Hình ảnh</label>
                            <input type="file" name="sp_hinh" class="form-control" id="sp_hinh" ng-model="sp_hinh" value="{{ old('sp_hinh')}}">
                            <span class="valid" ng-show="frmCreate.sp_hinh.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="sp_hinhanhlienquan">Hình ảnh liên quan</label>
                            <input type="file" name="sp_hinhanhlienquan[]" class="form-control" id="sp_hinhanhlienquan" ng-model="sp_hinhanhlienquan" multiple>
                        </div>
                        <div class="form-group">
                            <label for="sp_thongTin">Thông tin</label>
                            <input type="text" name="sp_thongTin" class="form-control" id="sp_thongTin" ng-model="sp_thongTin" ng-minlength="8" ng-required="true" value="{{ old('sp_thongTin') }}">
                            <span class="error" ng-show="frmCreate.sp_thongTin.$error.required">Vui lòng nhập thông tin</span>
                            <span class="error" ng-show="frmCreate.sp_thongTin.$error.minlength">Tên ít nhất 8 kí tự</span>
                            <span class="valid" ng-show="frmCreate.sp_thongTin.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="sp_danhGia">Đánh giá</label>
                            <input type="text" name="sp_danhGia" class="form-control" id="sp_danhGia" ng-model="sp_danhGia" ng-minlength="8" ng-required="true" value="{{ old('sp_danhGia') }}">
                            <span class="error" ng-show="frmCreate.sp_danhGia.$error.required">Vui lòng nhập đánh giá</span>
                            <span class="error" ng-show="frmCreate.sp_danhGia.$error.minlength">Tên ít nhất 8 kí tự</span>
                            <span class="valid" ng-show="frmCreate.sp_danhGia.$valid">Hợp lệ</span>
                        </div>

                        <div class="form-group">
                            <label for="l_ma">Thuộc loại</label>
                            <select name="l_ma" id="l_ma" class="form-control form-control-lg">
                                @foreach($loai as $loai)
                                    @if(old('l_ma') == $loai->l_ma)
                                        <option value="{{ $loai->l_ma }}" selected>{{ $loai->l_ten }}</option>
                                    @else
                                        <option value="{{ $loai->l_ma }}">{{ $loai->l_ten }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sp_trangThai">Trạng thái</label>
                            <select name="sp_trangThai" id="sp_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('sp_trangThai') == 1 ? 'selected': ''}}>Khóa</option>
                                <option value="2" {{old('sp_trangThai') == 2 ? 'selected': ''}}>Khả dụng</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmCreate.$invalid">Submit</button>
                        <a href="{{route('backend.sanpham.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('custom-scripts')
    <!-- Các script dành cho thư viện bootstrap-fileinput -->
    <script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $("#sp_hinh").fileinput({
                theme: 'fas'
                , showUpload: false
                , showCaption: true
                , fileType: "any"
                ,initialPreviewAsData: true
                , previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
                , overwriteInitial: false
            });

            // Ô nhập liệu cho phép chọn nhiều hình ảnh cùng lúc (các hình ảnh liên quan đến sản phẩm)
            $("#sp_hinhanhlienquan").fileinput({
                theme: 'fas'
                , showUpload: true
                , showCaption: true
                , fileType: "any"
                , previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
                , overwriteInitial: false
                , allowedFileExtensions: ["jpg", "gif", "png"]
            });
        });

    </script>

    <!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
    <script src="{{ asset('vendor/input-mask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('vendor/input-mask/bindings/inputmask.binding.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Gắn mặt nạ nhập liệu cho các ô nhập liệu Giá gốc
            $('#sp_giaGoc').inputmask({
                alias: 'currency'
                , positionCaretOnClick: "radixFocus"
                , radixPoint: "."
                , _radixDance: true
                , numericInput: true
                , groupSeparator: ","
                , suffix: ' vnđ'
                , min: 0, // 0 ngàn
                max: 100000000, // 1 trăm triệu
                autoUnmask: true
                , removeMaskOnSubmit: true
                , unmaskAsNumber: true
                , inputtype: 'text'
                , placeholder: "0"
                , definitions: {
                    "0": {
                        validator: "[0-9\uFF11-\uFF19]"
                    }
                }
            });

            // Gắn mặt nạ nhập liệu cho các ô nhập liệu Giá bán
            $('#sp_giaBan').inputmask({
                alias: 'currency'
                , positionCaretOnClick: "radixFocus"
                , radixPoint: "."
                , _radixDance: true
                , numericInput: true
                , groupSeparator: ","
                , suffix: ' vnđ'
                , min: 0, // 0 ngàn
                max: 100000000, // 1 trăm triệu
                autoUnmask: true
                , removeMaskOnSubmit: true
                , unmaskAsNumber: true
                , inputtype: 'text'
                , placeholder: "0"
                , definitions: {
                    "0": {
                        validator: "[0-9\uFF11-\uFF19]"
                    }
                }
            });

            // Gắn mặt nạ nhập liệu cho các ô nhập liệu Ngày tạo mới
            //$('#sp_taoMoi').inputmask({
               // alias: 'datetime'
                //, inputFormat: 'yyyy-mm-dd' // Định dạng Năm-Tháng-Ngày
            //});

            // Gắn mặt nạ nhập liệu cho các ô nhập liệu Ngày cập nhật
            //$('#sp_capNhat').inputmask({
                //alias: 'datetime'
                //, inputFormat: 'yyyy-mm-dd' // Định dạng Năm-Tháng-Ngày
            //});
        });

    </script>

    @endsection
