<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateChitietnhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('pn_ma')->comment('Phiếu nhập # pn_ma # pn_ma # Mã phiếu nhập');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('m_ma')->comment('Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)');
            $table->unsignedSmallInteger('ctn_soLuong')->default('1')->comment('Số lượng # Số lượng sản phẩm nhập kho');
            $table->unsignedInteger('ctn_donGia')->default('1')->comment('Đơng giá nhập # Giá nhập kho của sản phẩm');
            $table->timestamp('ctn_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết nhập');
            $table->timestamp('ctn_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chi tiết nhập gần nhất');
            $table->unsignedTinyInteger('ctn_trangThai')->default('1')->comment('Trạng thái # Trạng thái chi tiết nhập: 1-lập chi tiết nhập, 2-xuất chi tiết nhập, 3-hủy');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete 

            $table->primary(['pn_ma', 'sp_ma', 'm_ma']);
            $table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('pn_ma')->references('pn_ma')->on('phieunhap')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `chitietnhap` comment 'Chi tiết nhập # Chi tiết phiếu nhập: sản phẩm, màu, số lượng, đơn giá, phiếu nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietnhap');
    }
}
