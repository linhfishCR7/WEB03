@extends('backend.layouts.master')

@section('title')
Quyền người dùng
@endsection
@section('feature-title')
Quyền người dùng
@endsection

@section('feature-description')
Thêm Quyền người dùng
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
                <h2>Thêm mới quyền người dùng</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.quyen.store')}}" method="post" name="frmCreate" id="frmCreate" ng-submit="submitForm()">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="q_ten">Tên quyền</label>
                            <input type="text" name="q_ten" class="form-control" id="q_ten" ng-model="q_ten" ng-required="true" value="{{ old('q_ten') }}">
                            <span class="error" ng-show="frmCreate.q_ten.$error.required">Vui lòng nhập quyền</span>
                            <span class="valid" ng-show="frmCreate.q_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="q_dienGiai">Diễn giải</label>
                            <input type="text" name="q_dienGiai" class="form-control" id="q_dienGiai" ng-model="q_dienGiai" ng-required="true" value="{{ old('q_dienGiai') }}">
                            <span class="error" ng-show="frmCreate.q_dienGiai.$error.required">Vui lòng nhập diễn giải</span>
                            <span class="valid" ng-show="frmCreate.q_dienGiai.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="q_trangThai">Trạng thái</label>
                            <select name="q_trangThai" id="q_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('q_trangThai') == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('q_trangThai') == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmCreate.$invalid">Submit</button>
                        <a href="{{route('backend.quyen.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('custom-scripts')
    
    
    @endsection
