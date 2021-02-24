@extends('backend.layouts.master')

@section('title')
Vận chuyển
@endsection
@section('feature-title')
Vận chuyển
@endsection

@section('feature-description')
Thêm Vận chuyển
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
<div class="row" novalidate>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Thêm mới vận chuyển</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.vanchuyen.store')}}" method="post" name="frmCreate" id="frmCreate" ng-submit="submitForm()">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="vc_ten">Tên vận chuyển</label>
                            <input type="text" name="vc_ten" class="form-control" id="vc_ten" ng-model="vc_ten" ng-required="true" value="{{ old('vc_ten') }}">
                            <span class="error" ng-show="frmCreate.vc_ten.$error.required">Vui lòng nhập tên</span>
                            <span class="valid" ng-show="frmCreate.vc_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="vc_chiPhi">Chi phí</label>
                            <input type="text" name="vc_chiPhi" class="form-control" id="vc_chiPhi" ng-model="vc_chiPhi" ng-required="true" value="{{ old('vc_chiPhi') }}">
                            <span class="error" ng-show="frmCreate.vc_chiPhi.$error.required">Vui lòng nhập chi phí</span>
                            <span class="valid" ng-show="frmCreate.vc_chiPhi.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="vc_dienGiai">Diễn giải</label>
                            <input type="text" name="vc_dienGiai" class="form-control" id="vc_dienGiai" ng-model="vc_dienGiai" ng-required="true" value="{{ old('vc_dienGiai') }}">
                            <span class="error" ng-show="frmCreate.vc_dienGiai.$error.required">Vui lòng nhập diễn giải</span>
                            <span class="valid" ng-show="frmCreate.vc_dienGiai.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="vc_trangThai">Trạng thái</label>
                            <select name="vc_trangThai" id="vc_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('vc_trangThai') == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('vc_trangThai') == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmCreate.$invalid">Submit</button>
                        <a href="{{route('backend.xuatxu.index')}}" class="btn btn-info">Quay về</a>

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
