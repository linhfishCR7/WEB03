@extends('backend.layouts.master')

@section('title')
Thanh toán
@endsection
@section('feature-title')
Thanh toán
@endsection

@section('feature-description')
Thêm Thanh toán
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
                <h2>Thêm mới thanh toán</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.thanhtoan.store')}}" method="post" name="frmCreate" id="frmCreate" ng-submit="submitForm()">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="tt_ten">Tên thanh toán</label>
                            <input type="text" name="tt_ten" class="form-control" id="tt_ten" ng-model="tt_ten" ng-required="true" value="{{ old('tt_ten') }}">
                            <span class="error" ng-show="frmCreate.tt_ten.$error.required">Vui lòng nhập tên</span>
                            <span class="valid" ng-show="frmCreate.tt_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="tt_dienGiai">Diễn giải</label>
                            <input type="text" name="tt_dienGiai" class="form-control" id="tt_dienGiai" ng-model="tt_dienGiai" ng-required="true" value="{{ old('tt_dienGiai') }}">
                            <span class="error" ng-show="frmCreate.tt_dienGiai.$error.required">Vui lòng nhập diễn giải</span>
                            <span class="valid" ng-show="frmCreate.tt_dienGiai.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="tt_trangThai">Trạng thái</label>
                            <select name="tt_trangThai" id="tt_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('tt_trangThai') == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('tt_trangThai') == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmCreate.$invalid">Submit</button>
                        <a href="{{route('backend.thanhtoan.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('custom-scripts')
    
    

    @endsection
