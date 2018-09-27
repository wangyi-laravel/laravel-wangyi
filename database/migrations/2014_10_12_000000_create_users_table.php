<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('name')->comment('昵称');
            $table->enum('weight', [1,2])->comment('权限')->default(2);
            $table->enum('sex',[0,1])->comment('性别')->nullable();
            $table->string('phone')->comment('手机号')->nullable();
            $table->string('image')->comment('头像')->nullable();
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
        Schema::dropIfExists('users');
    }
}
