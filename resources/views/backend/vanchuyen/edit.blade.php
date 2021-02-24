@extends('backend.layouts.master')

@section('title')
Vận chuyển
@endsection
@section('feature-title')
Vận chuyển
@endsection

@section('feature-description')
Cập nhật Vận chuyển
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Cập nhật vận chuyển</h2>
                <div>
                    <form action="{{route('backend.vanchuyen.update',['vanchuyen' => $vc->vc_ma])}}" method="post" name="frmUpdate" id="frmUpdate">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="vc_ten">Tên vận chuyển</label>
                            <input type="text" name="vc_ten" class="form-control" id="vc_ten" value="{{ old('vc_ten', $vc->vc_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="vc_chiPhi">Chi phí</label>
                            <input type="text" name="vc_chiPhi" class="form-control" id="vc_chiPhi" value="{{ old('vc_chiPhi', $vc->vc_chiPhi) }}">
                        </div>
                        <div class="form-group">
                            <label for="vc_dienGiai">Diễn giải</label>
                            <input type="text" name="vc_dienGiai" class="form-control" id="vc_dienGiai" value="{{ old('vc_dienGiai', $vc->vc_dienGiai) }}">
                        </div>
                        <div class="form-group">
                            <label for="vc_trangThai">Trạng thái</label>
                            <select name="vc_trangThai" id="vc_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('vc_trangThai',$vc->vc_trangThai) == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('vc_trangThai',$vc->vc_trangThai) == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.vanchuyen.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('custom-scripts')

    <!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
    <script src="{{ asset('vendor/input-mask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('vendor/input-mask/bindings/inputmask.binding.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Gắn mặt nạ nhập liệu cho các ô nhập liệu Giá gốc
            $('#vc_chiPhi').inputmask({
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