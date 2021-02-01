@extends('backend.print.layouts.paper')

@section('title')
Biểu mẫu Phiếu in danh sách sản phẩm
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
<style type="text/css">
    .myOtherTable {
        background-color: #FFFFE0;
        border-collapse: collapse;
        color: #000;
        font-size: 18px;
    }

    .myOtherTable th {
        background-color: #BDB76B;
        color: white;
        height: 30px;
    }

    .myOtherTable td,
    .myOtherTable th {
        padding: 5px;
        border: 1px dotted #BDB76B;
    }

    .myOtherTable td {
        border: 1px dotted #BDB76B;
        text-align: center;
    }

    .hinhSanPham {
        max-width: 100px;
        max-height: 100px;
    }

</style>
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                    <h1>CÔNG TY TNHH LINHFISH</h1>
                    <b>http://havanlinh.tech/</b><br />
                    <b>034.2878.767</b><br />
                    <b>&hearts;&hearts;&hearts;</b>
                </td>
            </tr>
        </table>
        <?php 
        $tongSoTrang = ceil(count($danhsachsanpham)/5);
        ?>
        <table class="myOtherTable" width="100%">
            <h1 align="center">Danh sách sản phẩm</h1>
            {{-- <tr>
                <th colspan="6" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr> --}}
            <h6 align="left">Trang 1 / {{ $tongSoTrang }}</h6>
            <tr>
                <th>STT</th>
                <th >Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Loại sản phẩm</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr>
                <td >{{ $loop->index + 1 }}</td>
                <td >
                    <img class="hinhSanPham" src="{{ asset('storage/upload/' . $sp->sp_hinh) }}" />
                </td>
                <td >{{ $sp->sp_ten }}</td>
                <td >{{ $sp->sp_giaGoc }}</td>
                <td >{{ $sp->sp_giaBan }}</td>
                @foreach ($danhsachloai as $l)
                @if ($sp->l_ma == $l->l_ma)
                <td >{{ $l->l_ten }}</td>
                @endif
                @endforeach
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table class="myOtherTable" width="100%">
            <h6 align="left">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</h6>
            <tr>
                <th>STT</th>
                <th>Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Loại sản phẩm</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection
