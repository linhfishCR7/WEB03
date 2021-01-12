<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMauSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('sp_ma')->comment('Màu sắc # m_ma # m_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('m_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã màu sản phẩm');
            $table->unsignedSmallInteger('msp_soluong')->default('0')->comment('Số lượng # Số lượng sản phẩm tương ứng với màu');
            $table->timestamp('msp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo màu sản phẩm');
            $table->timestamp('msp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật màu sản phẩm gần nhất');
            $table->tinyInteger('msp_trangThai')->default('2')->comment('Trạng thái # Trạng thái màu sản phẩm: 1-khóa, 2-khả dụng');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

            $table->primary(['sp_ma', 'm_ma']);
            $table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `mau_sanpham` comment 'Số lượng sản phẩm theo màu # Số lượng sản phẩm tương ứng với các màu'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau_sanpham');
    }
}
