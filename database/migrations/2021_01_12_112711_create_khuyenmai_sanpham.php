<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateKhuyenmaiSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('km_ma')->comment('Chương trình # km_ma # km_ten # Mã chương trình khuyến mãi');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('m_ma')->comment('Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)');
            $table->string('kmsp_giaTri', 50)->default('100;0')->comment('Giá trị khuyến mãi # Giá trị khuyến mãi (giảm tiền/giảm % tiền, số lượng), định dạng: tien;soLuong (soLuong = 0, không giới hạn số lượng)');
            $table->timestamp('kmsp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo khuyến mãi sản phẩm');
            $table->timestamp('kmsp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật khuyến mãi sản phẩm gần nhất');
            $table->unsignedTinyInteger('kmsp_trangThai')->default('1')->comment('Trạng thái # Trạng thái khuyến mãi sản phẩm: 1-lập khuyến mãi sản phẩm, 2-xuất khuyến mãi sản phẩm, 3-hủy');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete 

            $table->primary(['km_ma', 'sp_ma', 'm_ma']);
            $table->foreign('km_ma')->references('km_ma')->on('khuyenmai')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `khuyenmai_sanpham` comment 'Thông tin khuyến mãi sản phẩm # Chi tiết về chương trình khuyến mãi'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
