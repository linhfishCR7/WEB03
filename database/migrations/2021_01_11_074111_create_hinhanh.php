<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHinhanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('ha_stt')->default('1')->comment('Số thứ tự # Số thứ tự hình ảnh của mỗi sản phẩm');
            $table->string('ha_ten', 150)->comment('Tên hình ảnh # Tên hình ảnh (không bao gồm đường dẫn)');
            $table->primary(['sp_ma', 'ha_stt']);
            $table->timestamp('ha_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo hình ảnh');
            $table->timestamp('ha_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật hình ảnh gần nhất');
            $table->tinyInteger('ha_trangThai')->default('2')->comment('Trạng thái # Trạng thái hình ảnh: 1-khóa, 2-khả dụng');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `hinhanh` comment 'Hình ảnh sản phẩm # Các hình ảnh chi tiết của sản phẩm'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
