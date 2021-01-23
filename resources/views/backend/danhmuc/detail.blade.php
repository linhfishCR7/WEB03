@extends('backend.layouts.master')

@section('title')
Chi tiết danh mục
@endsection

@section('feature-title')
Chi tiết danh mục
@endsection

@section('feature-description')
Chi tiết danh mục
@endsection

@section('custom-css')

@endsection

@section('content')
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
            <h4 class="card-title">{{$dm->dm_ma}}</h4>
            <p class="card-text">{{$dm->dm_ten}}</p>
            <a href="{{route('backend.danhmuc.index')}}" class="btn btn-primary">Quay về</a>
        </div>
    </div>

</div>
<!-- end row -->
@endsection

@section('custom-scripts')

@endsection
