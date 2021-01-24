<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhuyenMaiSanPhamTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];
        for ($i=1; $i <= 3; $i++) {
            $today = new DateTime();
            array_push($list, [
                'km_ma'                   => $i,
                'sp_ma'                   => $i,
                'm_ma'                    => $i,
                'kmsp_giaTri'             => "kmsp_giaTri $i",
                'kmsp_trangThai'          => $i
            ]);
        }
        DB::table('khuyenmai_sanpham')->insert($list);
    }
}