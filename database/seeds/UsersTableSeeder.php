<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Kế toán, 5-Nhân viên bán hàng, 6-Nhân viên giao hàng
        //admin

        $today = new DateTime('2021-01-01 00:00:00');
        $list = [
            [
                'id'        => 2,
                'name'  => "kh",
                'username'   => "kh",
                'genre'     => "F",
                'birthday'  => $today->format('Y-m-d H:i:s'),
                'phone'     => "0344878899",
                'address'  => $today->format('Y-m-d H:i:s'),
                'email'    => "kh@gmail.com",
                'password' => Hash::make('12345678'),
                'created_at'    => $today->format('Y-m-d H:i:s'),
                'updated_at'   => $today->format('Y-m-d H:i:s'),

            ],[
                'id'        => 3,
                'name'  => "qlk",
                'username'   => "qlk",
                'genre'     => "F",
                'birthday'  => $today->format('Y-m-d H:i:s'),
                'phone'     => "0344878877",
                'address'  => $today->format('Y-m-d H:i:s'),
                'email'    => "qlk@gmail.com",
                'password' => Hash::make('12345678'),
                'created_at'    => $today->format('Y-m-d H:i:s'),
                'updated_at'   => $today->format('Y-m-d H:i:s'),
            ],
            [
                'id'        => 4,
                'name'  => "admin",
                'username'   => "admin",
                'genre'     => "M",
                'birthday'  => $today->format('Y-m-d H:i:s'),
                'phone'     => "0344778899",
                'address'  => $today->format('Y-m-d H:i:s'),
                'email'    => "qt@gmail.com",
                'password' => Hash::make('12345678'),
                'created_at'    => $today->format('Y-m-d H:i:s'),
                'updated_at'   => $today->format('Y-m-d H:i:s'),
            ]
        ];

        DB::table('users')->insert($list);
    }
}
