<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $today = new DateTime('2021-01-01 00:00:00');

        for ($i=1; $i <= 30; $i++) {
            array_push($list, [
                'sp_ten'                  => "sp_ten $i",
                'sp_giaGoc'               => $i,
                'sp_giaBan'               => $i,
                'sp_hinh'                 => "betta-$i.jpg",
                'sp_thongTin'             => "sp_thong $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_trangThai'            => random_int(1,2),
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $i,
                'l_ma'                    => random_int(1,6),
            ]);
        }
        DB::table('sanpham')->insert($list);
    }
}
