@extends('backend.layouts.master')

@section('title')
Xuât Xứ
@endsection
@section('feature-title')
Xuât Xứ
@endsection

@section('feature-description')
Thêm Xuât Xứ
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
                <h2>Thêm mới xuất xứ</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.xuatxu.store')}}" method="post" name="frmCreate" id="frmCreate" ng-submit="submitForm()">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="xx_ten">Tên xuất xứ</label>
                            <input type="text" name="xx_ten" class="form-control" id="xx_ten" ng-model="xx_ten" ng-required="true" value="{{ old('xx_ten') }}">
                            <span class="error" ng-show="frmCreate.xx_ten.$error.required">Vui lòng nhập tên</span>
                            <span class="valid" ng-show="frmCreate.xx_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="xx_trangThai">Trạng thái</label>
                            <select name="xx_trangThai" id="xx_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('xx_trangThai') == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('xx_trangThai') == 2 ? 'selected': ''}}>ACTIVE</option>
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
