@extends('backend.layouts.master')

@section('title')
Team Members
@endsection

@section('feature-title')
Team Members
@endsection

@section('feature-description')
Team Members
@endsection

@section('custom-css')

@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Search</label>
                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="status-select" class="mr-2">Sort By</label>
                            <select class="custom-select" id="status-select">
                                <option selected="">All</option>
                                <option value="1">Name</option>
                                <option value="2">Post</option>
                                <option value="3">Followers</option>
                                <option value="4">Followings</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                        <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div><!-- end col-->
</div>
<!-- end row -->

<div class="row">
    @foreach($user1 as $user)
    <div class="col-lg-4">
        <div class="text-center card-box ribbon-box">
            @if($user->name=='Quản trị')
            <div class="ribbon-two ribbon-two-danger"><span>Admin</span></div>
            @elseif($user->name=='Quản lý kho')
            <div class="ribbon-two ribbon-two-info"><span>Warehouse</span></div>
            @elseif($user->name=='Giám đốc')
            <div class="ribbon-two ribbon-two-success"><span>Director</span></div>
            @elseif($user->name=='Kế toán')
            <div class="ribbon-two ribbon-two-warning"><span>Accountor</span></div>
            @elseif($user->name=='Nhân Viên Kinh doanh')
            <div class="ribbon-two ribbon-two-primary"><span>Marketting</span></div>
            {{-- @else --}}
            {{-- <div class="ribbon-two ribbon-two-warning"><span>Shipper</span></div> --}}
            @endif
            <div class="clearfix"></div>
            <div class="pt-2 pb-2">
                @if($user->genre == 'F')
                <img src="{{ asset('themes/Minton_green/assets/images/users/avatar-9.jpg')}}" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                @else
                <img src="{{ asset('themes/Minton_green/assets/images/users/avatar-'.$user->id.'.jpg')}}" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                @endif

                <h4 class="mt-3 font-17"><a href="extras-profile.html" class="text-dark">Freddie J. Plourde</a></h4>
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
{{$user1->links()}}


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

<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add Members</h4>
    <div class="custom-modal-text text-left">
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter position">
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" placeholder="Enter company">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('custom-scripts')
@endsection
