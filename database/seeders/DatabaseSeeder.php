<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(XuatXuTableSeeder::class);
        $this->call(ThanhToanTableSeeder::class);
        $this->call(VanChuyenTableSeeder::class);
        $this->call(QuyenTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MauTableSeeder::class);
        $this->call(NhaCungCapTableSeeder::class);
        $this->call(DanhMucTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        $this->call(SanPhamTableSeeder::class);
        $this->call(MauSanPhamTableSeeder::class);
        $this->call(PhieuNhapTableSeeder::class);
        $this->call(KhachHangTableSeeder::class);
        $this->call(DonHangTableSeeder::class);
        $this->call(HoaDonLeTableSeeder::class);
        $this->call(HoaDonSiTableSeeder::class);
        $this->call(ChiTietDonHangTableSeeder::class);
        $this->call(ChiTietNhapTableSeeder::class);
        $this->call(ChuDeableSeeder::class);
        $this->call(ChuDeSanPhamTableSeeder::class);
        $this->call(GopYTableSeeder::class);
        $this->call(HinhAnhTableSeeder::class);
        $this->call(KhuyenMaiTableSeeder::class);
        $this->call(KhuyenMaiSanPhamTableSeeder::class);
        $this->call(NhanVienTableSeeder::class);

    }
}
