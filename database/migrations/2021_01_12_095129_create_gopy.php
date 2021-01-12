<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGopy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('gy_ma')->comment('Mã góp ý');
            $table->dateTime('gy_thoiGian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm góp ý # Thời điểm góp ý');
            $table->text('gy_noiDung')->comment('Góp ý # Nội dung góp ý');
            $table->unsignedBigInteger('kh_ma')->comment('Khách hàng # kh_ma # kh_hoTen # Mã khách hàng');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->timestamp('gy_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo góp ý');
            $table->timestamp('gy_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật góp ý gần nhất');
            $table->unsignedTinyInteger('gy_trangThai')->default('3')->comment('Trạng thái # Trạng thái góp ý: 1-khóa, 2-hiển thị, 3-chờ duyệt');
            $table->softDeletes()->comment('Xóa mềm');  // soft delete         

            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `gopy` comment 'Góp ý # Góp ý'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gopy');
    }
}
