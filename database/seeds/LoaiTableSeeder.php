<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = [
            "Cá Betta Fancy", "Cá Betta Galaxy", "Cá Betta Halfmoon", "Cá Betta Giant", "Cá Betta Koi",
            "Cá Betta Koi nemo"
        ];
        sort($types);

        $today = new DateTime('2021-01-01 00:00:00');

        for ($i = 1; $i <= count($types); $i++) {
            array_push($list, [
                'l_ma'              => $i,
                'l_ten'             => $types[$i - 1],
                'l_trangThai'       => random_int(1, 2),
                'l_taoMoi'          => $today->format('Y-m-d H:i:s'),
                'l_capNhat'         => $today->format('Y-m-d H:i:s'),
                'dm_ma'             => 1

            ]);
        }
        DB::table('loai')->insert($list);
    }
}
