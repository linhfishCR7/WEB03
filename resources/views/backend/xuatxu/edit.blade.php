@extends('backend.layouts.master')

@section('title')
Xuất xứ
@endsection
@section('feature-title')
Xuất xứ
@endsection

@section('feature-description')
Cập nhật Xuất xứ
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
<div class="row" >
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Cập nhật xuất xứ</h2>
                <div >
                    <form action="{{route('backend.xuatxu.update',['xuatxu' => $xx->xx_ma])}}" method="post" name="frmUpdate" id="frmUpdate" >
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="xx_ten">Tên xuất xứ</label>
                            <input type="text" name="xx_ten" class="form-control" id="xx_ten"  value="{{ old('xx_ten', $xx->xx_ten) }}">
                            
                        </div>
                        <div class="form-group">
                            <label for="xx_trangThai">Trạng thái</label>
                            <select name="xx_trangThai" id="xx_trangThai" class="form-control form-control-lg">
                                <option value="1" {{old('xx_trangThai',$xx->xx_trangThai) == 1 ? 'selected': ''}}>BLOCK</option>
                                <option value="2" {{old('xx_trangThai',$xx->xx_trangThai) == 2 ? 'selected': ''}}>ACTIVE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.xuatxu.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
