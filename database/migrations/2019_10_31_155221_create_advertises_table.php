<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('title')->comment('Chủ đề quảng cáo');
            $table->string('image')->comment('Tên file hình sản phẩm');
            $table->boolean('at_home_page')->default(0);
            $table->date('start_date')->comment('Ngày bắt đầu quảng cáo');
            $table->date('end_date')->comment('ngày kết thúc quảng cáo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('advertises');
    }
}
