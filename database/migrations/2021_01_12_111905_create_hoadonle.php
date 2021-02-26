<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHoadonle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonle', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('hdl_ma')->comment('Mã hóa đơn bán lẻ');
            $table->string('hdl_nguoiMuaHang', 100)->comment('Người mua hàng # Họ tên người mua hàng');
            $table->string('hdl_dienThoai', 11)->comment('Điện thoại # Điện thoại');
            $table->string('hdl_diaChi', 250)->comment('Địa chỉ # Địa chỉ');
            $table->unsignedBigInteger('nv_lapHoaDon')->comment('Lập hóa đơn # nv_ma # nv_hoTen # Mã nhân viên (người lập hóa đơn)');
            $table->dateTime('hdl_ngayXuatHoaDon')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm xuất # Thời điểm xuất hóa đơn');
            $table->unsignedBigInteger('dh_ma')->default('1')->comment('Đơn hàng # dh_ma # dh_ma # Mã đơn hàng, 1-Không xuất hóa đơn');
            $table->timestamp('hdl_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo hóa đơn');
            $table->timestamp('hdl_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật hóa đơn gần nhất');
            $table->unsignedTinyInteger('hdl_trangThai')->default('1')->comment('Trạng thái # Trạng thái hóa đơn: 1-lập hóa đơn, 2-xuất hóa đơn, 3-hủy');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

            $table->foreign('dh_ma')->references('dh_ma')->on('donhang')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('nv_lapHoaDon')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `hoadonle` comment 'Hóa đơn bán lẻ # Hóa đơn bán lẻ: sản phẩm, màu, số lượng, đơn giá, đơn hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonle');
    }
}
