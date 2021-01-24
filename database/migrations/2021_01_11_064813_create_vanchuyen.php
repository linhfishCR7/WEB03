<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVanchuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('vc_ma')->autoIncrement()->comment('Mã dịch vụ giao hàng');
            $table->string('vc_ten', 200)->comment('Tên dịch vụ # tên dịch vụ giao hàng');
            $table->float('vc_chiPhi',2)->default('0')->comment('Phí giao hàng # Phí giao hàng');
            $table->text('vc_dienGiai')->comment('Thông tin # thông tin dịch vụ giao hàng');
            $table->timestamp('vc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo dịch vụ giao hàng');
            $table->timestamp('vc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật dịch vụ giao hàng gần nhất');
            $table->tinyInteger('vc_trangThai')->default('2')->comment('Trạng thái # Trạng thái dịch vụ giao hàng: 1-khóa, 2-khả dụng');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
