<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuanggaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guanggaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名称');
            $table->string('site')->comment('连接地址');
            $table->string('image')->comment('图片');
            $table->string('cate')->comment('类型');
            $table->string('jieshao')->comment('介绍');
            $table->string('paixu')->comment('排序');
            $table->string('weizhi')->comment('位置');

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
        Schema::dropIfExists('guanggaos');
    }
}
