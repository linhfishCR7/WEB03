<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XuatXuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $places = ["Phú Bình, An Giang", "Tân Quy Đông, Sa Đéc", "Mỹ Phong,
    Mỹ Tho","Vị Thanh, Hậu Giang","Cái Mơn, Bến Tre","Phước Định, Vĩnh Long","Đà Lạt"
        ];
        sort($places);

        $today = new DateTime('2021-01-01 00:00:00');

        for ($i=1; $i <= count($places); $i++) {
            array_push($list, [
                'xx_ma'      => $i,
                'xx_ten'     => $places[$i-1],
                'xx_trangThai'     => random_int(1,2),
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('xuatxu')->insert($list);
    }
}
