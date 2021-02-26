@extends('backend.layouts.master')

@section('title')
Gallery
@endsection

@section('feature-title')
Gallery
@endsection

@section('feature-description')
Gallery
@endsection

@section('custom-css')
<!-- Lightbox css -->

<link href="{{ asset('themes/Minton_green/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<!-- Filter -->
<div class="row">
    <div class="col-12">
        <div class="text-center filter-menu">
            <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
            @foreach($loai as $loai)
            <a href="javascript: void(0);" class="filter-menu-item" data-rel="{{$loai->l_ma}}">{{$loai->l_ten}}</a>
            @endforeach

        </div>
    </div>
</div>
<!-- end row-->

<div class="row filterable-content">
    {{-- all --}}
    @foreach($all as $all)
    <div class="col-sm-6 col-xl-3 filter-item all illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$all->sp_hinh) }}" class="image-popup" title="{{$all->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$all->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$all->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$all->sp_ten}}-{{$all->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaFancy --}}
    @foreach($BettaFancy as $BettaFancy)
    <div class="col-sm-6 col-xl-3 filter-item 1 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaFancy->sp_hinh) }}" class="image-popup" title="{{$BettaFancy->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaFancy->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaFancy->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaFancy->sp_ten}}-{{$BettaFancy->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaGalaxy --}}
    @foreach($BettaGalaxy as $BettaGalaxy)
    <div class="col-sm-6 col-xl-3 filter-item 2 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaGalaxy->sp_hinh) }}" class="image-popup" title="{{$BettaGalaxy->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaGalaxy->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaGalaxy->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaGalaxy->sp_ten}}-{{$BettaGalaxy->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaGiant --}}
    @foreach($BettaGiant as $BettaGiant)
    <div class="col-sm-6 col-xl-3 filter-item 3 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaGiant->sp_hinh) }}" class="image-popup" title="{{$BettaGiant->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaGiant->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaGiant->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaGiant->sp_ten}}-{{$BettaGiant->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaHalfmoon --}}
    @foreach($BettaHalfmoon as $BettaHalfmoon)
    <div class="col-sm-6 col-xl-3 filter-item 4 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaHalfmoon->sp_hinh) }}" class="image-popup" title="{{$BettaHalfmoon->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaHalfmoon->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaHalfmoon->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaHalfmoon->sp_ten}}-{{$BettaHalfmoon->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaKoi --}}
    @foreach($BettaKoi as $BettaKoi)
    <div class="col-sm-6 col-xl-3 filter-item 5 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaKoi->sp_hinh) }}" class="image-popup" title="{{$BettaKoi->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaKoi->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaKoi->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaKoi->sp_ten}}-{{$BettaKoi->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
    {{-- BettaKoinemo --}}
    @foreach($BettaKoinemo as $BettaKoinemo)
    <div class="col-sm-6 col-xl-3 filter-item 6 illustrator">
        <div class="gal-box">
            <a href="{{ asset('storage/upload/'.$BettaKoinemo->sp_hinh) }}" class="image-popup" title="{{$BettaKoinemo->sp_ten}}">
                <img src="{{ asset('storage/upload/'.$BettaKoinemo->sp_hinh) }}" class="img-fluid" alt="work-thumbnail">
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0">{{$BettaKoinemo->sp_ten}}</h4>
                <a href="javascript: void(0);">
                    <img src="{{asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle" height="24">
                    <span class="text-muted ml-1">{{$BettaKoinemo->sp_ten}}-{{$BettaKoinemo->l_ma}}</span>
                </a>
                <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-muted"></i></a>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->

    </div> <!-- end col -->
    @endforeach
</div>
<!-- end row -->

@endsection

@section('custom-scripts')
<!-- Magnific Popup-->
<script src="{{ asset('themes/Minton_green/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- Gallery Init-->
<script src="{{ asset('themes/Minton_green/assets/js/pages/gallery.init.js')}}"></script>

@endsection
