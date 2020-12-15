<?php

Use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('slug',160);



            $table->string('product_name',150);
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
            $table->longText('image')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
