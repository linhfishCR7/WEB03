<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDonHangTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];

        $faker = Faker\Factory::create();

        for ($i=1; $i <= 20; $i++) {
            $today = new DateTime();
            array_push($list, [
                'dh_ma'                   => $faker->numberBetween(1, 15),
                'sp_ma'                   => $faker->numberBetween(1, 30),
                'm_ma'                    => $faker->numberBetween(1, 20),
                'ctdh_soLuong'            => $faker->numberBetween(1, 20),
                'ctdh_donGia'             => round($faker->randomFloat(99999999, 80000, 6500000), -3),
                'ctdh_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'ctdh_capNhat'              => $today->format('Y-m-d H:i:s'),
                'ctdh_trangThai'            => random_int(1, 2),
            ]);
        }
        DB::table('chitietdonhang')->insert($list);
    }
}