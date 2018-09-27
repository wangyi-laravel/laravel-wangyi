<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('商品标题');
            $table->string('image')->comment('商品图片');
            $table->string('price')->comment('商品单价');
            $table->string('prices')->comment('商品总价');
            $table->string('color')->comment('商品颜色');
            $table->string('size')->comment('商品尺寸');
            $table->string('site')->comment('地址');
            $table->string('user_id')->comment('用户ID');
            $table->Integer('amount')->comment('数量')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
