@extends('backend.layouts.master')

@section('title')
Danh mục
@endsection
@section('feature-title')
Danh mục
@endsection

@section('feature-description')
Cập nhật Danh mục
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
                <h2>Cập nhật danh mục</h2>
                <div ng-controller="mainController">
                    <form action="{{route('backend.danhmuc.update',['danhmuc' => $dm->dm_ma])}}" method="post" name="frmUpdate" id="frmUpdate" ng-submit="submitForm()">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="dm_ten">Tên danh mục</label>
                            <input type="text" name="dm_ten" class="form-control" id="dm_ten" ng-model="dm_ten" ng-minlength="4" ng-maxlength="20" ng-required="true" value="{{ old('dm_ten', $dm->dm_ten) }}">
                            <span class="error" ng-show="frmUpdate.dm_ten.$error.required">Vui lòng nhập tên</span>
                            <span class="error" ng-show="frmUpdate.dm_ten.$error.minlength">Tên ít nhất 2 kí tự</span>
                            <span class="error" ng-show="frmUpdate.dm_ten.$error.maxlength">Tên nhỏ hơn 20 kí tự</span>
                            <span class="valid" ng-show="frmUpdate.dm_ten.$valid">Hợp lệ</span>
                        </div>
                        <div class="form-group">
                            <label for="dm_trangThai">Trạng thái</label>
                            <select name="dm_trangThai" id="dm_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('dm_trangThai',$dm->dm_trangThai) == 1 ? 'selected': ''}}>Khóa</option>
                                <option value="2" {{old('dm_trangThai',$dm->dm_trangThai) == 2 ? 'selected': ''}}>Khả dụng</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" ng-disabled="frmUpdate.$invalid">Submit</button>
                        <a href="{{route('backend.danhmuc.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
