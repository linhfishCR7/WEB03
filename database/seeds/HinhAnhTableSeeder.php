<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhAnhTableSeeder extends Seeder {
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
                'sp_ma'                   => $i,
                'ha_stt'                  => $i,
                'ha_ten'                  => "ha_ten $i",
                'ha_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'ha_capNhat'              => $today->format('Y-m-d H:i:s'),
                'ha_trangThai'            => random_int(1,2),
            ]);
        }
        DB::table('hinhanh')->insert($list);
    }
}