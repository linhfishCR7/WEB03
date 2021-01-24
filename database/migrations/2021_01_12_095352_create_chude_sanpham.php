<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateChudeSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedTinyInteger('cd_ma')->comment('Chủ để # cd_ma # cd_ten # Mã chủ đề');
            $table->timestamp('cdsp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề sản phẩm');
            $table->timestamp('cdsp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chủ đề sản phẩm gần nhất');
            $table->unsignedTinyInteger('cdsp_trangThai')->default('3')->comment('Trạng thái # Trạng thái chủ đề sản phẩm: 1-khóa, 2-hiển thị, 3-chờ duyệt');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

            $table->primary(['sp_ma', 'cd_ma']);
            $table->foreign('cd_ma')->references('cd_ma')->on('chude')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `chude_sanpham` comment 'Chủ đề sản phẩm # Sản phầm thuộc các chủ đề'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude_sanpham');
    }
}
