@extends('backend.layouts.master')

@section('title')
Danh sách khách hàng card
@endsection

@section('feature-title')
Danh sách khách hàng card
@endsection

@section('feature-description')
Danh sách khách hàng card
@endsection

@section('custom-css')

@endsection
@section('content')


<div class="row">
    @foreach($danhsachkhachhang1 as $danhsachkhachhang)
    <div class="col-lg-4">
        <div class="text-center card-box ribbon-box">

            <div class="clearfix"></div>
            <div class="pt-2 pb-2">
                @if($danhsachkhachhang->kh_gioiTinh == '0')
                <img src="{{ asset('themes/Minton_green/assets/images/users/avatar-9.jpg')}}" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                @else
                <img src="{{ asset('themes/Minton_green/assets/images/users/avatar-1.jpg')}}" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                @endif

                <h4 class="mt-3 font-17"><a href="#" class="text-dark"></a>{{$danhsachkhachhang->kh_hoTen}}</h4>
                <p class="text-muted">@Founder <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>

                <p class="text-muted font-13 mb-3">
                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                </p>

                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="mdi mdi-email mr-1"></i> Message</button>
                <button type="button" class="btn btn-light btn-sm waves-effect"><i class="mdi mdi-phone mr-1"></i> Call</button>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>

            </div> <!-- end .padding -->
        </div> <!-- end card-box-->
    </div> <!-- end col -->
    @endforeach


</div>
<!-- end row -->
{{$danhsachkhachhang1->links()}}


{{-- <div class="row">
    <div class="col-12">
        <div class="text-right">
            <ul class="pagination pagination-rounded justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div> --}}

<!-- end row -->

@endsection

@section('custom-scripts')
@endsection
