<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class HoaDonSiTableSeeder extends Seeder {
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
                'hds_nguoiMuaHang'        => "hds_nguoiMuaHang $i",
                'hds_tenDonVi'            => "hds_tenDonVi $i",
                'hds_diaChi'              => "hds_diaChi $i",
                'hds_maSoThue'            => "hds_maSoThu $i",
                'hds_soTaiKhoan'          => "hds_soTaiKhoan $i",
                'nv_lapHoaDon'            => $i,
                'hds_ngayXuatHoaDon'      => $today->format('Y-m-d H:i:s'),
                'nv_thuTruong'            => $i,
                'hds_taoMoi'              => $today->format('Y-m-d H:i:s'),
                'hds_capNhat'             => $today->format('Y-m-d H:i:s'),
                'hds_trangThai'           => random_int(1,2),
                'dh_ma'                   => $i,
                'tt_ma'                   => $i
            ]);
        }
        DB::table('hoadonsi')->insert($list);
    }
}