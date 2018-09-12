<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->increments('id')->comment('购物车');
            $table->string('title')->comment('商品标题')->nullable();
            $table->string('image')->comment('商品图片')->nullable();
            $table->string('price')->comment('商品价格')->nullable();
            $table->string('color')->comment('商品颜色')->nullable();
            $table->string('size')->comment('商品尺寸')->nullable();
            $table->Integer('user_id')->comment('用户ID');
            $table->string('amount')->comment('数量');
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
        Schema::dropIfExists('cart_items');
    }
}


