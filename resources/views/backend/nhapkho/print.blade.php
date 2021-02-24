@extends('backend.print.layouts.paper')

@section('title')
Biểu mẫu Phiếu in phiếu nhập
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

        
    </article>
</section>
@endsection
