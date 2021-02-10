@extends('frontend.layouts.master')

@section('title')
404
@endsection
@section('main')
Home /
@endsection

@section('sub')
404
@endsection

@section('custom-css')
@endsection
@section('main-content')
{{-- @section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
<!-- 440 ERROR -->

<!-- /440 ERROR -->
@endsection
@section('custom-scripts')
<script>
Swal.fire({
  icon: 'info',
  title: 'NOT LOGIN!',
  text: 'Please login user',
  footer: '<a href="/xac-thuc">Login or Register</a>'
})
</script>
@endsection
