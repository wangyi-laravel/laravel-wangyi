<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sheng')->comment('省')->nullable();
            $table->string('shi')->comment('市')->nullable();
            $table->string('qu')->comment('区')->nullable();
            $table->string('address')->comment('详细地址')->nullable();
            $table->string('call')->comment('联系电话');
            $table->string('name')->comment('收货人');
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
        Schema::dropIfExists('sites');
    }
}
