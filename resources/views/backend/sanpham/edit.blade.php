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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Cập nhật sản phẩm</h2>
                <div>
                    <form action="{{route('backend.sanpham.update',['sanpham' => $sp->sp_ma])}}" method="post" name="frmUpdate" id="frmUpdate" ng-submit="submitForm()" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="sp_ten">Tên sản phẩm</label>
                            <input type="text" name="sp_ten" class="form-control" id="sp_ten" value="{{ old('sp_ten', $sp->sp_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="sp_giaGoc">Giá góc</label>
                            <input type="text" name="sp_giaGoc" class="form-control" id="sp_giaGoc" value="{{ old('sp_giaGoc', $sp->sp_giaGoc) }}">
                        </div>
                        <div class="form-group">
                            <label for="sp_giaBan">Giá bán</label>
                            <input type="text" name="sp_giaBan" class="form-control" id="sp_giaBan" value="{{ old('sp_giaBan', $sp->sp_giaBan) }}">
                        </div>
                        <div class="form-group">
                            <label for="sp_hinh">Hình ảnh</label>
                            <input type="file" name="sp_hinh" class="form-control" id="sp_hinh" value="{{ old('sp_hinh', $sp->sp_hinh) }}">
                        </div>
                        <div class="form-group">
                            <label for="sp_hinhanhlienquan">Hình ảnh liên quan</label>
                            <input type="file" name="sp_hinhanhlienquan[]" class="form-control" id="sp_hinhanhlienquan" ng-model="sp_hinhanhlienquan" multiple>
                        </div>
                        <div class="form-group">
                            <label for="sp_thongTin">Thông tin</label>
                            <input type="text" name="sp_thongTin" class="form-control" id="sp_thongTin" value="{{ old('sp_thongTin', $sp->sp_thongTin) }}">
                        </div>
                        <div class="form-group">
                            <label for="sp_danhGia">Đánh giá</label>
                            <input type="text" name="sp_danhGia" class="form-control" id="sp_danhGia" value="{{ old('sp_danhGia', $sp->sp_danhGia) }}">
                        </div>

                        <div class="form-group">
                            <label for="l_ma">Thuộc loại</label>
                            <select name="l_ma" id="l_ma" class="form-control form-control-lg">
                                @foreach ( $loai as $loai)
                                @if($loai->l_ma == $sp->l_ma)
                                <option value="{{$loai->l_ma}}" selected>{{$loai->l_ten}}</option>
                                @else
                                <option value="{{$loai->l_ma}}">{{$loai->l_ten}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sp_trangThai">Trạng thái</label>
                            <select name="sp_trangThai" id="sp_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('sp_trangThai',$sp->sp_trangThai) == 1 ? 'selected': ''}}>Khóa</option>
                                <option value="2" {{old('sp_trangThai',$sp->sp_trangThai) == 2 ? 'selected': ''}}>Khả dụng</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmUpdate.$invalid">Submit</button>
                        <a href="{{route('backend.sanpham.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('custom-scripts')


    <script>
        $(document).ready(function() {
            $("#sp_hinh").fileinput({
                theme: 'fas'
                , showUpload: true
                , showCaption: true
                , fileType: "any"
                , append: false
                , showRemove: false
                , autoReplace: true
                , previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
                , overwriteInitial: false
                , initialPreviewShowDelete: false
                , initialPreviewAsData: true
                , initialPreview: [
                    "{{ asset('storage/upload/' . $sp->sp_hinh) }}"
                ]
                , initialPreviewConfig: [{
                    caption: "{{ $sp->sp_hinh }}"
                    , size: {{ Storage::exists('public/upload/'.$sp -> sp_hinh) ? Storage::size('public/upload/'.$sp -> sp_hinh) : 0 }}
                    , width: "120px"
                    , url: "{$url}"
                    , key: 1
                }, ]
            });
            // Ô nhập liệu cho phép chọn nhiều hình ảnh cùng lúc (các hình ảnh liên quan đến sản phẩm)
            $("#sp_hinhanhlienquan").fileinput({
                    theme: 'fas',
                    showUpload: true,
                    showCaption: true,
                    fileType: "any",
                    append: true,
                    showRemove: true,
                    autoReplace: true,
                    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
                    overwriteInitial: false,
                    allowedFileExtensions: ["jpg", "gif", "png"],
                    initialPreviewAsData: true,
                    initialPreview: [
                        @foreach($sp->hinhanhlienquan()->get() as $hinhAnh)
                        "{{ asset('storage/upload/' . $hinhAnh->ha_ten) }}",
                        @endforeach
                    ],
                    initialPreviewConfig: [
                        @foreach($sp->hinhanhlienquan()->get() as $index=>$hinhAnh)
                        {
                            caption: "{{ $hinhAnh->ha_ten }}", 
                            size: {{ Storage::exists('public/upload/' . $hinhAnh->ha_ten) ? Storage::size('public/upload/' . $hinhAnh->ha_ten) : 0 }}, 
                            width: "120px", 
                            url: "{$url}", 
                            key: {{ ($index + 1) }}
                        },
                        @endforeach
                    ]
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

        });

    </script>

    @endsection
