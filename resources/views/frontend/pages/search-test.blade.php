@extends('frontend.layouts.master')

@section('title')
Index
@endsection
@section('main')
Home /
@endsection

@section('sub')
Index
@endsection

@section('custom-css')
<style>
    ul.product-list .list-item figure {
        width: 250px;
        height: 280px;
        margin-bottom: 15px;
    }

</style>
@endsection
@section('main-content')



<!-- /PRODUCT LIST -->
<div class="row" ng-controller="timkiem">
    <form method="get" action="{{ route('frontend.pages.timkiem') }}"  name="frmSearch" id="frmSearch">
        <input type="text" name="keyword_search_by_loai" id="keyword_search_by_loai" class="form-control" />
        <input type="text" name="keyword_search_by_tensanpham" id="keyword_search_by_tensanpham" class="form-control" />
        <button class="btn btn-info my-3" ng-click="timkiem()">tìm</button>
    </form>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Hình đại diện</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="ds_loaisanpham in ds_loaisanpham">
                            <td><% $index + 1 %></td>
                            <td>
                                <img ng-src="/storage/photos/<% ds_loaisanpham.sp_hinh %>" class="img-hinhdaidien" /></td>
                            <td><% ds_loaisanpham.sp_ten %></td>
                            <td><% ds_loaisanpham.sp_giaBan | number:0 %></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
@section('custom-scripts')
<script>
    app.controller('timkiem', function($scope, $http) {
            $scope.ds_loaisanpham = [];
        // Dữ liệu 
        var senData = {
            'keyword_search_by_loai': $('#keyword_search_by_loai').val()
            , 'keyword_search_by_tensanpham': $('#keyword_search_by_tensanpham').val()
            , 'keyword_search_by_giatu': $('#keyword_search_by_giatu').val()
            , 'keyword_search_by_giaden': $('#keyword_search_by_giaden').val(),
        }
        var url = "{{ route('api.timkiem') }}";
        url += "?keyword_search_by_loai=" + senData.keyword_search_by_loai;
        url += "&keyword_search_by_tensanpham=" + senData.keyword_search_by_tensanpham;
        url += "&keyword_search_by_giatu="+ senData.keyword_search_by_giatu;
        url += "&keyword_search_by_giaden="+ senData.keyword_search_by_giaden;
        $http({
            url: url
            , method: "GET" //dùng get thì phải thêm ? tham số  còn post thì không cần và route sử lại get và ít ai sử dụng post cho tìm kiếm
            , data: senData

        }).then(function successCallback(response) {
            // Nếu gởi request thành công thì chuyển dữ liệu sang cho AngularJS hiển thị
            $scope.ds_loaisanpham = response.data.result;
            //console.log(response.data.result);
            //console.log($scope.danhsach_top3_sanpham_moinhat);

        }, function errorCallback(response) {
            // Lấy dữ liệu không thành công, thông báo lỗi cho khách hàng biết
            swal('Có lỗi trong quá trình lấy dữ liệu!', 'Vui lòng thử lại sau vài phút.', 'error');
            console.log(response);
        });

    });

</script>
@endsection
