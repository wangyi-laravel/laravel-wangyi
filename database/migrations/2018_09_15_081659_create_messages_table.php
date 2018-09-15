<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('消息内容');
            $table->Integer('catch_id')->default(0)->comment('接收人id');
            $table->Integer('send_id')->comment('发送人id');
            $table->string('send_name')->nullable()->comment('发送人昵称');
            $table->Integer('content_id')->comment('回复的消息id')->nullable();
            $table->enum('status',[0,1])->comment('类型')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
