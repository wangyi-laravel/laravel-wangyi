<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCreateOrderIdOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->Integer('cart_id')->comment('订单ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            //
             Schema::dropIfExists('orders');

        });
    }
}
