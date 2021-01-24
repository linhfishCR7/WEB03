<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuDeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $categories = ["Cá đá", "Lễ hội cá Betta","Cá Koi"];
        sort($categories);

        $today = new DateTime('2021-01-01 00:00:00');

        for ($i=1; $i <= count($categories); $i++) {
            array_push($list, [
                'cd_ma'      => $i,
                'cd_ten'     => $categories[$i-1],
                'cd_trangThai'     => random_int(1,2),
                'cd_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'cd_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('chude')->insert($list);
    }
}
