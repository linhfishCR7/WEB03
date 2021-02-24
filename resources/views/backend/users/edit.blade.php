@extends('backend.layouts.master')

@section('title')
User
@endsection
@section('feature-title')
User
@endsection

@section('feature-description')
Cập nhật User
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
                <h2>Cập nhật User - {{ $user->name}} </h2>
                <div>
                    <form action="{{route('backend.user.update',$user)}}" method="post" name="frmUpdate" id="frmUpdate">
                        {{csrf_field() }}
                        <input type="hidden" name="_method" value="put" />

                        <div class="form-group">
                            <label for="name">Họ Tên</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{  $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Tên tài khoản</label>
                            <input type="text" name="username" class="form-control" id="username" value="{{  $user->username }}">
                        </div>
                        <div class="form-group">
                            <label for="genre">Giới tính</label>
                            <select name="genre" id="genre" class="form-control form-control-md" >
                                <option value="F" {{old('genre',$user->genre) == 'F' ? 'selected': ''}}>Female</option>
                                <option value="M" {{old('genre',$user->genre) == 'M'? 'selected': ''}}>Male</option>
                                <option value="O" {{old('genre',$user->genre) == 'O' ? 'selected': ''}}>Unknow</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            {{-- <input type="text" data-provide="datepicker" name="birthday" class="form-control" id="birthday" value="{{  $user->birthday }}"> --}}
                            <div class="input-group">
                                <input type="text" name="birthday" class="form-control" id="birthday" value="{{  $user->birthday }}" data-provide="datepicker" data-date-format="yyyy/mm/dd">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{  $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{  $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="address" value="{{ $user->address }}">
                        </div>
                        <div class="form-group">
                            <label for="id">Role</label>
                            <div class="form-check">
                                {{-- @foreach($quyen as $quyen)
                                @if(old('q_ma') == $quyen->q_ma)
                                <input type="checkbox" name="q_ma[]" checked id="q_ma" value="{{ old('q_ma', $quyen->q_ma) }}">
                                <label for="q_ten">{{$quyen->q_ten}}</label>
                                @else
                                <input type="checkbox" name="q_ma[]" id="q_ma" value="{{ old('q_ma', $quyen->q_ma) }}">
                                <label for="q_ten">{{$quyen->q_ten}}</label>
                                @endif
                                @endforeach --}}
                                @foreach($quyen as $quyen)
                                <input type="checkbox" name="quyen[]" id="quyen" value="{{ $quyen->id }}" @if($user->quyens->pluck('id')->contains($quyen->id)) checked @endif>
                                <label for="q_ten">{{$quyen->q_ten}}</label> &nbsp;

                                @endforeach
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="active">Trạng thái</label>
                            <select name="active" id="active" class="form-control form-control-lg">
                                <option value="0" {{old('active',$user->active) == 0 ? 'selected': ''}}>Block</option>
                                <option value="1" {{old('active',$user->active) == 1 ? 'selected': ''}}>Active</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.user.index')}}" class="btn btn-info">Quay về</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('custom-scripts')
    @endsection
