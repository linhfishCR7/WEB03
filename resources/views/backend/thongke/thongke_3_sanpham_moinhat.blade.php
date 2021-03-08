@extends('backend.layouts.master')

@section('title')
3 sản phẩm mới nhất
@endsection

@section('feature-title')
3 sản phẩm mới nhất
@endsection

@section('feature-description')
3 sản phẩm mới nhất
@endsection

@section('custom-css')
<style>
    .img-hinhdaidien {
        width: 100px;
        height: 100px;
    }

</style>
@endsection

@section('content')

<div class="row" ng-controller="thongKeSanPhamController">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách sản phẩm</h4>
                
                <table id="selection-datatable" class="table table-striped table-responsive table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>STT</th>
                            <th>Hình đại diện</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="sp in danhsach_top3_sanpham_moinhat">
                            <td><% $index + 1 %></td>
                            <td>
                                <img ng-src="/storage/upload/<% sp.sp_hinh %>" class="img-hinhdaidien" /></td>
                            <td><% sp.sp_ten %></td>
                            <td><% sp.sp_giaBan | number:0 %></td>
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
    $(document).ready(function() {
        $('#selection-datatable').DataTable();
    });

</script>
<script>
  // Khai báo controller `thongKeSanPhamController`
  app.controller('thongKeSanPhamController', function($scope, $http) {
    // Dữ liệu
    $scope.danhsach_top3_sanpham_moinhat = [];

    // sử dụng service $http của AngularJS để gởi request GET đến route `api.thongke.top3_sanpham_moinhat`
    $http({
        url: "{{ route('api.thongke.top3_sanpham_moinhat') }}",
        method: "GET"
    }).then(function successCallback(response) {
      // Nếu gởi request thành công thì chuyển dữ liệu sang cho AngularJS hiển thị
      $scope.danhsach_top3_sanpham_moinhat = response.data.result;
      console.log(response.data.result);
      console.log($scope.danhsach_top3_sanpham_moinhat);

    }, function errorCallback(response) {
        // Lấy dữ liệu không thành công, thông báo lỗi cho khách hàng biết
        swal('Có lỗi trong quá trình lấy dữ liệu!', 'Vui lòng thử lại sau vài phút.', 'error');
        console.log(response);
    });

  });
</script>
@endsection
