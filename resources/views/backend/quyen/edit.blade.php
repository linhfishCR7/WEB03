@extends('backend.layouts.master')

@section('title')
Quyền người dùng
@endsection
@section('feature-title')
Quyền người dùng
@endsection

@section('feature-description')
Cập nhật Quyền người dùng
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
                <h2>Cập nhật quyền người dùng</h2>
                <div>
                    <form action="{{route('backend.quyen.update',['quyen' => $q->id])}}" method="post" name="frmUpdate" id="frmUpdate">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="q_ten">Tên quyền</label>
                            <input type="text" name="q_ten" class="form-control" id="q_ten" value="{{ old('q_ten', $q->q_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="q_dienGiai">Diễn giải</label>
                            <input type="text" name="q_dienGiai" class="form-control" id="q_dienGiai" value="{{ old('q_dienGiai', $q->q_dienGiai) }}">
                        </div>
                        <div class="form-group">
                            <label for="q_trangThai">Trạng thái</label>
                            <select name="q_trangThai" id="q_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('q_trangThai',$q->q_trangThai) == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('q_trangThai',$q->q_trangThai) == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.quyen.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
