<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GopYTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];

        for ($i=1; $i <= 30; $i++) {
            $today = new DateTime();
            array_push($list, [
                'gy_thoiGian'             => $today->format('Y-m-d H:i:s'),
                'gy_noiDung'              => "gy_noiD $i",
                'kh_ma'                   => $i,
                'sp_ma'                   => $i,
                'gy_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'gy_capNhat'              => $today->format('Y-m-d H:i:s'),
                'gy_trangThai'            => random_int(1,2),
            ]);
        }
        DB::table('gopy')->insert($list);
    }
}