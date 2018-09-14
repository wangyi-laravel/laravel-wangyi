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
            $table->integer('support')->nullable();
            $table->dateTime('like_time')->nullable();
            $table->text('nickname')->nullable();
            $table->text('content')->nullable();
            $table->integer('attitude')->nullable();
            $table->dateTime('create_time')->nullable();
            $table->text('likeIPs')->nullable();
            $table->integer('display');
            $table->ipAddress('ip')->nullable();
            $table->integer('good_id')->nullable();
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
