<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinglunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pingluns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid');
            $table->string('nickname')->nullable()->default(0);
            $table->integer('support')->nullable()->default(6665);
            $table->dateTime('like_time')->nullable();
            $table->text('content')->nullable();
            $table->integer('attitude')->nullable();
            $table->dateTime('create_time')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->text('likeIPs')->nullable();
            $table->integer('display')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pingluns');
    }
}
