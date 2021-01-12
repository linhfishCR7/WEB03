<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateLoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('l_ma')->autoIncrement()->comment('Mã loại sản phẩm');
            $table->string('l_ten', 50)->comment('Tên loại # Tên loại sản phẩm');
            $table->timestamp('l_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo loại sản phẩm');
            $table->timestamp('l_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật loại sản phẩm gần nhất');
            $table->tinyInteger('l_trangThai')->default('2')->comment('Trạng thái # Trạng thái loại sản phẩm: 1-khóa, 2-khả dụng');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         
            $table->unique(['l_ten']);
            $table->unsignedTinyInteger('dm_ma')->comment('Mã danh mục');
            $table->foreign('dm_ma') //cột khóa ngoại là cột `l_ma` trong table `sanpham`
                ->references('dm_ma')->on('danhmuc') //cột sẽ tham chiếu đến là cột `l_ma` trong table `loai`
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
