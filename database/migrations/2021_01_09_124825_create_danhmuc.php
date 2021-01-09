<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateDanhmuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuc', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->unsignedTinyInteger('dm_ma')->autoIncrement()->comment('Mã danh mục');
                $table->string('dm_ten', 50)->comment('Tên danh mục # Tên danh mục sản phẩm');
                $table->timestamp('dm_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo danh mục sản phẩm');
                $table->timestamp('dm_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật danh mục sản phẩm gần nhất');
                $table->tinyInteger('dm_trangThai')->default('2')->comment('Trạng thái # Trạng thái danh mục sản phẩm: 1-khóa, 2-khả dụng');    
                $table->softDeletes()->comment('Xóa mềm');  // soft delete         
                $table->unique(['dm_ten']);
                
            });
            DB::statement("ALTER TABLE `danhmuc` comment 'Danh mục sản phẩm # Danh mục sản phẩm'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhmuc');
    }
}
