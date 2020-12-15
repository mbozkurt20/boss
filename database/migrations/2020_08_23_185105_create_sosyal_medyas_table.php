<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSosyalMedyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosyal_medyas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('ln');
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
        Schema::dropIfExists('sosyal_medyas');
    }
}
