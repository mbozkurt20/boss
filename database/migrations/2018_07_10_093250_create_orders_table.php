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
            $table->integer('user_id')->unsigned();
            $table->string('product_name');
            $table->string('color');
            $table->float('coil_length');
            $table->float('total_length');
            $table->float('unit_price');
            $table->float('product_price');
            $table->float('unitWeight');
            $table->float('totalWeight');
            $table->float('copperWeight');
            $table->float('miktar');
            $table->text('product_detail');
            $table->integer('qty');

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
