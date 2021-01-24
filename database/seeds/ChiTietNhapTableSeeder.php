<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietNhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        for ($i = 1; $i <= 3; $i++) {
            $today = new DateTime();
            array_push($list, [
                'pn_ma'                   => $i,
                'sp_ma'                   => $i,
                'm_ma'                    => $i,
                'ctn_soLuong'             => $i,
                'ctn_donGia'              => $i,
                'ctn_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'ctn_capNhat'              => $today->format('Y-m-d H:i:s'),
                'ctn_trangThai'            => random_int(1, 2),
            ]);
        }
        DB::table('chitietnhap')->insert($list);
    }
}
