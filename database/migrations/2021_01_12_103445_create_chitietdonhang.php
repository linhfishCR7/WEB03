<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateChitietdonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('dh_ma')->comment('Đơn hàng # dh_ma # dh_ma # Mã đơn hàng');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('m_ma')->comment('Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)');
            $table->unsignedSmallInteger('ctdh_soLuong')->default('1')->comment('Số lượng # Số lượng sản phẩm đặt mua');
            $table->unsignedInteger('ctdh_donGia')->default('1')->comment('Đơn giá # Giá bán');
            $table->timestamp('ctdh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết đon hàng');
            $table->timestamp('ctdh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chi tiết đon hàng gần nhất');
            $table->tinyInteger('ctdh_trangThai')->default('2')->comment('Trạng thái # Trạng thái chi tiết đon hàng sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

            $table->primary(['dh_ma', 'sp_ma', 'm_ma']);
            $table->foreign('dh_ma')->references('dh_ma')->on('donhang')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `chitietdonhang` comment 'Chi tiết đơn hàng # Chi tiết đơn hàng: sản phẩm, màu, số lượng, đơn giá, đơn hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
