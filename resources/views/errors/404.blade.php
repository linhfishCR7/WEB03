@extends('frontend.westeros.layouts.master')

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
<!-- 404 ERROR -->
<div id="error404-wrap">
    <section id="error404">
        <div class="error-description">
            <h1>Sorry!</h1>
            <h3>The page you were looking for was moved or doesn't exist.</h3>
            <a href="{{ route('frontend.index')}}" class="button">Return to previous page</a>
        </div>

        <!-- ERROR PROMO -->
        <div class="error-promo">
            <div class="error-pin">
                <h4>OOpss!</h4>
            </div>
            <img src="{{ asset('themes/westeros/images/smoke.png')}}" alt="smoke">
        </div>
        <!-- /ERROR PROMO -->
    </section>
</div>
<!-- /404 ERROR -->
@endsection
