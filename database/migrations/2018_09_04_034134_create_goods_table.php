<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('商品标题');
            $table->string('image')->comment('商品图片');
            $table->string('miaoshu')->comment('商品描述');
            $table->string('price')->comment('商品价格');
            $table->text('content')->comment('商品详情');
            $table->string('jifen')->comment('积分');
            $table->string('number')->comment('数量');
            $table->Integer('cate_id')->comment('关联二级分类'); 
            $table->Integer('attr_id')->comment('关联属性'); 
            $table->string('attrval_id')->comment('关联属性值');
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
        Schema::dropIfExists('goods');
    }
}
