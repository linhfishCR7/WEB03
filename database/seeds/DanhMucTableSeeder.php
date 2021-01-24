<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = ["Cá Betta", "Hoa Lan", "Mỹ Phẩm"];
        sort($types);

        $today = new DateTime('2021-01-01 00:00:00');

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'dm_ma'      => $i,
                'dm_ten'     => $types[$i-1],
                'dm_trangThai'     => random_int(1,2),
                'dm_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'dm_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('danhmuc')->insert($list);
    }
}
