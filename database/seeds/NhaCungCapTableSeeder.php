<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('2021-01-01 00:00:00');

        $list = [
            [
                'ncc_ma'       => 1,
                'ncc_ten'      => "Cty TNHH TMDV Tiến Hoạt",
                'ncc_daiDien' => "Nguyễn Trần Tiến Hoạt",
                'ncc_diaChi' => "162, Khóm Tân Mỹ, P. Tân Quy Đông, TP. Sa Đéc, Đồng Tháp",
                'ncc_dienThoai' => "01624519280",
                'ncc_email' => "nguyen_tran_tien_hoat19900525@gmail.com",
                'ncc_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat'  => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai'     => random_int(1, 2),
                'xx_ma'     => random_int(1, 7)

            ],
            [
                'ncc_ma'       => 2,
                'ncc_ten'      => "Cty TNHH MTV Hoa Tươi Thịnh Linh",
                'ncc_daiDien' => "Trần Cường Thịnh",
                'ncc_diaChi' => "9 huyện lộ 90B, Ấp Mỹ Hòa, X. Mỹ Phong, TP. Mỹ Tho, Tiền Giang",
                'ncc_dienThoai' => "01881133779",
                'ncc_email' => "tran_cuong-thinh.19731227@gmail.com",
                'ncc_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat'  => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai'     => random_int(1, 2),
                'xx_ma'     => random_int(1, 7)

            ],
            [
                'ncc_ma'       => 3,
                'ncc_ten'      => "DNTN Tuyết Thiên",
                'ncc_daiDien' => "Trần Nguyễn Giang Thiên",
                'ncc_diaChi' => "44, X. Vị Thanh, H. Vị Thủy, Hậu Giang",
                'ncc_dienThoai' => "01278672080",
                'ncc_email' => "tran-nguyen-giang.thien-19790919@gmail.com",
                'ncc_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat'  => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai'     => random_int(1, 2),
                'xx_ma'     => random_int(1, 7)

            ]

        ];
        DB::table('nhacungcap')->insert($list);
    }
}
